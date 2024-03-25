<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 11B</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<main class="table" id="customers_table">
        <section class="table__header">
            <h1>Хичээлийн Аривсаан</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Class 11Б <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Аривсаан <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Хаана <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Очих ёстой Цаг <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Байдал <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Цалин <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 дахь өдөр </td>
                        <td> Дизайн Технологи, Хими, Түүх, Иргэний ёс зүйн боловсрол, Биеийн тамир, Мат</td>
                        <td> 2-р сургууль </td>
                        <td> 8 цаг 15 минут  </td>
                        <td>
                            <p class="status delivered">Шинэ хуваарь</p>
                        </td>
                        <td> <strong> $? </strong></td>
                    </tr>
                    <tr>
                        <td> 2 дахь өдөр </td>
                        <td> Мат, Англи хэл, Уран зохиол, Тамир </td>
                        <td>  2-р сургууль </td>
                        <td> 8 цаг 15 минут </td>
                        <td>
                            <p class="status delivered">Шинэ хуваарь</p>
                        </td>
                        <td> <strong>$?</strong> </td>
                    </tr>
                    <tr>
                        <td> 3 дахь өдөр</td>
                        <td> Мат , Эрүүл мэнд , Газарзүй , Монгол бичиг , Англи хэл сонгон </td>
                        <td>  2-р сургууль </td>
                        <td> 8 цаг 15 минут </td>
                        <td>
                            <p class="status delivered">Шинэ хуваарь</p>
                        </td>
                        <td> <strong>$?</strong> </td>
                    </tr>
                    <tr>
                        <td> 4 дахь өдөр</td>
                        <td> Мэдээлэл зүй , Монгол Бичиг , Дүрслэх урлаг, Биологи , Монгол хэл , Англи хэл Сонгон </td>
                        <td>  2-р сургууль </td>
                        <td> 8 цаг 15 минут </td>
                        <td>
                            <p class="status delivered">Шинэ хуваарь</p>
                        </td>
                        <td> <strong>$?</strong> </td>
                    </tr>
                    <tr>
                        <td> 5 дахь өдөр</td>
                        <td> Иргэний боловсрол , Англи хэл, Хими , Физик </td>
                        <td>  2-р сургууль </td>
                        <td> 8 цаг 15 минут </td>
                        <td>
                            <p class="status delivered">Шинэ хуваарь</p>
                        </td>
                        <td> <strong>$?</strong> </td>
                    </tr>
                    <tr>
                        <td> 6 дахь өдөр</td>
                        <td> Гэрийн даалгавар </td>
                        <td>  Гэртээ </td>
                        <td> Хүссэн цагтаа </td>
                        <td>
                            <p class="status pending">Үл мэдэгдэх</p>
                        </td>
                        <td> <strong>$?</strong> </td>
                    </tr>
                    <tr>
                        <td> 7 дахь өдөр</td>
                        <td> Гэрийн даалгавар </td>
                        <td>  Гэртээ </td>
                        <td> Хүссэн цагтаа </td>
                        <td>
                            <p class="status pending">Үл мэдэгдэх</p>
                        </td>
                        <td> <strong>$?</strong> </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <script src="script.js"></script>
    <a href="logout.php" class="loginout"><button>Logout</button></a>
</body>
</html>
