<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<!--    <link href="css/font-awesome.min.css" rel="stylesheet" />-->
    <link href="../site/css/detail.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../site/css/cart.css" rel="stylesheet">
    <link href="../site/css/index.css" rel="stylesheet">
    <style>
        *{box-sizing: border-box;}
        .productDetail{
            width: 1240px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <header class=" bg-gray-900">
        <div class="max-w-7xl mx-auto flex justify-between py-4">
            <div class="1 flex">
                <div class="logo ">
                    <img src="../upload/logo.jpg" width="150px" style="margin-top: 16.5px" alt="">
                </div>
                <div class="menu">
                    <ul class="flex py-3 px-10">
                <?php
                    $list_category = loadall_category();
                    foreach ($list_category as $list){
                        extract($list);
                        echo '<li><a href="" class="px-3 text-gray-400 hover:text-white">'.$name_category.'</a></li>';
                    }
                ?>
<!--                <div class="menu">-->
<!--                    <ul class="flex py-3 px-10">-->
<!--                        <li><a href="" class="px-3 text-gray-400 hover:text-white">TRANG CHỦ</a></li>-->
<!--                        <li><a href="" class="px-4 text-gray-400 hover:text-white">NỮ</a></li>-->
<!--                        <li><a href="" class="px-4 text-gray-400 hover:text-white">NAM</a></li>-->
<!--                        <li><a href="" class="px-4 text-gray-400 hover:text-white">BÉ GÁI </a></li>-->
<!--                        <li><a href="" class="px-4 text-gray-400 hover:text-white">BÉ TRAI</a></li>-->
<!--                        <li><a href="" class="px-4 text-gray-400 hover:text-white">OUTLET</a></li>-->
                    </ul>
                </div>
            </div>

            <div class="2 flex py-2">
                <div class="px-4">
                    <form action="" class="bg-white rounded-3xl  bg-gray-600">
                        <button type="submit" class="fa fa-search px-3"></button>
                        <input type="text" placeholder="Bạn tìm gì..."
                            class="py-2 pr-4 rounded-3xl bg-gray-600 focus:outline-none text-white">
                    </form>
                </div>
                <div class="py-2 pl-5 flex">
                    <a href="index.php?act=cart" class="px-2"><img
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTQuNSAxMy4wODY0VjE5LjVDNC41IDE5LjY5ODkgNC41NzkwMiAxOS44ODk3IDQuNzE5NjcgMjAuMDMwNEM0Ljg2MDMyIDIwLjE3MSA1LjA1MTA5IDIwLjI1IDUuMjUgMjAuMjVIMTguNzVDMTguOTQ4OSAyMC4yNSAxOS4xMzk3IDIwLjE3MSAxOS4yODAzIDIwLjAzMDRDMTkuNDIxIDE5Ljg4OTcgMTkuNSAxOS42OTg5IDE5LjUgMTkuNVYxMy4wODY2IiBzdHJva2U9IndoaXRlIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTUuMDY1NzMgMy43NUgxOC45MzQzQzE5LjA5NzMgMy43NSAxOS4yNTU4IDMuODAzMDkgMTkuMzg1OSAzLjkwMTI0QzE5LjUxNiAzLjk5OTM5IDE5LjYxMDYgNC4xMzcyNSAxOS42NTU0IDQuMjkzOTZMMjEgOUgzTDQuMzQ0NTggNC4yOTM5NkM0LjM4OTM2IDQuMTM3MjUgNC40ODM5NiAzLjk5OTM5IDQuNjE0MDggMy45MDEyNEM0Ljc0NDIgMy44MDMwOSA0LjkwMjc0IDMuNzUgNS4wNjU3MyAzLjc1WiIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik05IDlWMTAuNUM5IDExLjI5NTYgOC42ODM5MyAxMi4wNTg3IDguMTIxMzIgMTIuNjIxM0M3LjU1ODcxIDEzLjE4MzkgNi43OTU2NSAxMy41IDYgMTMuNUM1LjIwNDM1IDEzLjUgNC40NDEyOSAxMy4xODM5IDMuODc4NjggMTIuNjIxM0MzLjMxNjA3IDEyLjA1ODcgMyAxMS4yOTU2IDMgMTAuNVY5IiBzdHJva2U9IndoaXRlIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTE1IDlWMTAuNUMxNSAxMS4yOTU2IDE0LjY4MzkgMTIuMDU4NyAxNC4xMjEzIDEyLjYyMTNDMTMuNTU4NyAxMy4xODM5IDEyLjc5NTYgMTMuNSAxMiAxMy41QzExLjIwNDQgMTMuNSAxMC40NDEzIDEzLjE4MzkgOS44Nzg2OCAxMi42MjEzQzkuMzE2MDcgMTIuMDU4NyA5IDExLjI5NTYgOSAxMC41VjkiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8cGF0aCBkPSJNMjEgOVYxMC41QzIxIDExLjI5NTYgMjAuNjgzOSAxMi4wNTg3IDIwLjEyMTMgMTIuNjIxM0MxOS41NTg3IDEzLjE4MzkgMTguNzk1NiAxMy41IDE4IDEzLjVDMTcuMjA0NCAxMy41IDE2LjQ0MTMgMTMuMTgzOSAxNS44Nzg3IDEyLjYyMTNDMTUuMzE2MSAxMi4wNTg3IDE1IDExLjI5NTYgMTUgMTAuNVY5IiBzdHJva2U9IndoaXRlIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg=="
                            alt=""></i></a>
                    <a href="" class="px-2"><img
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyLjUzMDMgMTkuODY0TDIwLjEyNzEgMTIuMjY3MkMyMS45OTM3IDEwLjQwMDYgMjIuMjY5MSA3LjMyOTc2IDIwLjUwMjcgNS4zNjgxMUMyMC4wNjAyIDQuODc1MzMgMTkuNTIyIDQuNDc3ODYgMTguOTIwOCA0LjE5OTk3QzE4LjMxOTcgMy45MjIwNyAxNy42NjgyIDMuNzY5NTYgMTcuMDA2MiAzLjc1MTc2QzE2LjM0NDEgMy43MzM5NiAxNS42ODU0IDMuODUxMjMgMTUuMDcwMiA0LjA5NjQyQzE0LjQ1NSA0LjM0MTYxIDEzLjg5NjIgNC43MDk1NyAxMy40Mjc5IDUuMTc3ODZMMTIgNi42MDU3MUwxMC43NjcyIDUuMzcyOUM4LjkwMDYgMy41MDYzIDUuODI5NzYgMy4yMzA5MSAzLjg2ODExIDQuOTk3MzVDMy4zNzUzMyA1LjQzOTgxIDIuOTc3ODYgNS45NzgwNCAyLjY5OTk3IDYuNTc5MTlDMi40MjIwNyA3LjE4MDM0IDIuMjY5NTYgNy44MzE4MSAyLjI1MTc2IDguNDkzODRDMi4yMzM5NiA5LjE1NTg4IDIuMzUxMjMgOS44MTQ2IDIuNTk2NDIgMTAuNDI5OEMyLjg0MTYxIDExLjA0NSAzLjIwOTU3IDExLjYwMzggMy42Nzc4NiAxMi4wNzIxTDExLjQ2OTcgMTkuODY0QzExLjYxMDMgMjAuMDA0NiAxMS44MDExIDIwLjA4MzYgMTIgMjAuMDgzNkMxMi4xOTg5IDIwLjA4MzYgMTIuMzg5NyAyMC4wMDQ2IDEyLjUzMDMgMTkuODY0VjE5Ljg2NFoiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K"
                            alt=""></i></a>
                    <a href="index.php?act=signup" class="px-2"><img
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDIxQzE2Ljk3MDYgMjEgMjEgMTYuOTcwNiAyMSAxMkMyMSA3LjAyOTQ0IDE2Ljk3MDYgMyAxMiAzQzcuMDI5NDQgMyAzIDcuMDI5NDQgMyAxMkMzIDE2Ljk3MDYgNy4wMjk0NCAyMSAxMiAyMVoiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8cGF0aCBkPSJNMTIgMTVDMTQuMDcxMSAxNSAxNS43NSAxMy4zMjExIDE1Ljc1IDExLjI1QzE1Ljc1IDkuMTc4OTMgMTQuMDcxMSA3LjUgMTIgNy41QzkuOTI4OTMgNy41IDguMjUgOS4xNzg5MyA4LjI1IDExLjI1QzguMjUgMTMuMzIxMSA5LjkyODkzIDE1IDEyIDE1WiIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik01Ljk4MTIgMTguNjkxM0M2LjU0NjE1IDE3LjU4MDYgNy40MDc0NCAxNi42NDc4IDguNDY5NzMgMTUuOTk2M0M5LjUzMjAyIDE1LjM0NDggMTAuNzUzOSAxNSAxMiAxNUMxMy4yNDYyIDE1IDE0LjQ2OCAxNS4zNDQ4IDE1LjUzMDMgMTUuOTk2M0MxNi41OTI2IDE2LjY0NzggMTcuNDUzOSAxNy41ODA2IDE4LjAxODkgMTguNjkxMyIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo="
                            alt=""></a>
                    <a href="index.php?act=signin" class="px-2"><img
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzMyXzIxNDEpIj4KPHBhdGggZD0iTTIwLjI1MDcgNi43NUgzLjc1MDczQzMuMzM2NTIgNi43NSAzLjAwMDczIDcuMDg1NzkgMy4wMDA3MyA3LjVMMy43NTA3MyAxOS41QzMuNzUwNzMgMTkuOTE0MiA0LjA4NjUyIDIwLjI1IDQuNTAwNzMgMjAuMjVIMTkuNTAwN0MxOS45MTQ5IDIwLjI1IDIwLjI1MDcgMTkuOTE0MiAyMC4yNTA3IDE5LjVMMjEuMDAwNyA3LjVDMjEuMDAwNyA3LjA4NTc5IDIwLjY2NDkgNi43NSAyMC4yNTA3IDYuNzVaIiBzdHJva2U9IndoaXRlIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTE1Ljc1IDkuNzVWNS4yNUMxNS43NSA0Ljg1MjE4IDE1LjU5MiA0LjQ3MDY0IDE1LjMxMDcgNC4xODkzNEMxNS4wMjk0IDMuOTA4MDQgMTQuNjQ3OCAzLjc1IDE0LjI1IDMuNzVIOS43NUM5LjM1MjE4IDMuNzUgOC45NzA2NCAzLjkwODA0IDguNjg5MzQgNC4xODkzNEM4LjQwODA0IDQuNDcwNjQgOC4yNSA0Ljg1MjE4IDguMjUgNS4yNVY5Ljc1IiBzdHJva2U9IndoaXRlIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9nPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSJjbGlwMF8zMl8yMTQxIj4KPHJlY3Qgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0IiBmaWxsPSJ3aGl0ZSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo="
                            alt=""></i></a>
                </div>
            </div>
        </div>
    </header>