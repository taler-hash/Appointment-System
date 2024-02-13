@echo off
set "PATH=;C:\PHP"
:loop
call php  ./folder/folder2/sent.php
PING 1.1.1.1 -n 1 -w 10000 >NUL
goto :loop