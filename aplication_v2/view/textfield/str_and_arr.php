<body>

        <h3>number of words: <?= $countResult ?></h3>
        <h3>longest word is: <?= $maxLenResult ?> characters</h3>
        <h3>number of words: <?= $avrCharResult ?? 0 ?></h3>
        <br>

        <div class="container">
            <table class=wordCount>
                <tr>
                    <th>Word</th>
                    <th>Count</th>
                </tr>
                <?php foreach ($mostCommon as $item => $count) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item); ?></td>
                        <td><?php echo $count; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>