<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Студенты</title>
</head>
<body>
    <div class="body">
        <div class="shapka"><h1 class="name">АПТ</h1></div>
        <div class="menu">
            <ul class="menu-ul">
                <li class="menu-li"><a href="/"><i class="fa fa-" aria-hidden="true"></i>Основные сведения</a></li>
                <li class="menu-li"><a href="/speciality"><i class="fa fa-" aria-hidden="true"></i>Специальности</a></li>
                <li class="menu-li"><a href="/contact"><i class="fa fa-" aria-hidden="true"></i>Контакты</a></li>
                <li class="menu-li"><a href="/post"><i class="fa fa-" aria-hidden="true"></i>Студенты</a></li>
                <li class="menu-li"><a href="/prepod"><i class="fa fa-" aria-hidden="true"></i>Учителя</a></li>
            </ul>    
        </div>
        <div class="telo">
            @if(count($studs))
            <table border=1>
                <tr>
                    <th>id</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Рост</th>
                    <th>Группа</th>
                    <th>Средний_бал</th>
                    <th>Возраст</th>
                    <th>время1</th>
                    <th>время2</th>
                </tr>
                @foreach($studs as $stud)
                <tr>
                    <td>{{$stud->id}}</td>
                    <td>{{$stud->name}}</td>
                    <td>{{$stud->fam}}</td>
                    <td>{{$stud->rost}}</td>
                    <td>{{$stud->grup}}</td>
                    <td>{{$stud->sr}}</td>
                    <td>{{$stud->yer}}</td>
                    <td>{{$stud->created_at}}</td>
                    <td>{{$stud->updated_at}}</td>
                </tr>
                @endforeach
            </table>
            @endif
        </div>
        <div class="podval">
            <p>Связь с администратором сайта</p> 
            <p>TrEnZaIoR@mail.ru</p>
        </div>
    </div>
</body>
</html>