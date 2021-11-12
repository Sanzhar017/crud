<?php

//CRUD

//C - Create
//R - Read
//U - Update
//D - Delete

// Подключение к БД
//1) host: Localhost ll 127.0.0.1
//2) user: root пользователь
//3) password
//4) databasename in MySql
//Подключаемся к БД в переменной $connect
$connect = mysqli_connect("localhost","root","","crud");

//  Проверка успешно ли мы подключились?
//  if(!$connect){
//      echo ("error db");
//  }