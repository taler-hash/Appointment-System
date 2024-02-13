Set WinScriptHost = CreateObject("WScript.shell")
WinScriptHost.Run Chr(34) & "C:\xampp\htdocs\Appointment\autodelete\autodeletescript.bat" & Chr(34), 0
Set WinScriptHost = Nothing