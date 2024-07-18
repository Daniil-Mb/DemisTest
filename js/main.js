document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.form form');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(form);
        
        try {
            const response = await fetch('/feedback/save', {
                method: 'POST',
                body: formData
            });
            const result = await response.json();
            if (result.errors) {
                displayErrors(result.errors);
            } else {
                await updateFeedbackTable(); 
                form.reset();
            }
        } catch (error) {
            console.error('Error:', error);
        }
    });

    function displayErrors(errors) {
        for (let [field, message] of Object.entries(errors)) {
            const span = form.querySelector(`input[name="${field}"]`).nextElementSibling;
            span.textContent = message;
        }
    }

    async function updateFeedbackTable() {
        try {
            const response = await fetch('/feedback/all', {
                method: 'GET'
            });
            const feedbacks = await response.json();
            const tableBody = document.querySelector('.table tbody');
            tableBody.innerHTML = '';

            feedbacks.forEach(feedback => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${feedback.name}</td>
                    <td>${feedback.address}</td>
                    <td>${feedback.number}</td>
                    <td>${feedback.email}</td>
                `;
                tableBody.appendChild(row);
            });
        } catch (error) {
            console.error('Error fetching feedbacks:', error);
        }
    }

    updateFeedbackTable();
});
