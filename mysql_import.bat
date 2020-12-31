@echo off
title Mysql Import Script
cd C:\Users\AppData\Roaming\UserData\ReceiveFile\Dump20200714
 for %%a in (*) do (
     echo Importing File  : %%a 
     mysql -u root -psecret db_name < %%a
)
pause