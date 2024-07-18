<div class="feedback">
    <div class="form">
        <div class="topic-text"><h1>Оставьте нам контакты для обратной связи</h1></div>
        <form id="feedbackForm" method="post">
            <div class="input-box">
                <input type="text" name="name" placeholder="Введите ФИО"/>
                <span class="error" data-error="name" style="color: red;"></span>
            </div>
            <div class="input-box">
                <input type="text" name="address"  placeholder="Введите адресс"/>
                <span class="error" data-error="address" style="color: red;"></span>
            </div>
            <div class="input-box">
                <input type="number" name="number" placeholder="Введите телефон"/>
                <span class="error" data-error="number" style="color: red;"></span>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Введите email"/>
                <span class="error" data-error="email" style="color: red;"></span>
            </div>
            <button class="button" type="submit">Отправить</button>
        </form>
    </div>
</div>

<h2>Вы отравили:</h2>

<table class="table" id="feedbackTable">
    <thead>
        <tr>
            <th>ФИО</th>
            <th>Адрес</th>
            <th>Телефон</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($feedback)): ?>
            <?php foreach ($feedback as $entry): ?>
                <tr>
                    <td><?= $entry['name'] ?></td>
                    <td><?= $entry['address'] ?></td>
                    <td><?= $entry['number'] ?></td>
                    <td><?= $entry['email'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>
