Set WinScriptHost=CreateObject("Wscript.Shell")
WinScriptHost.Run Chr(34) & "D:\newxampp\htdocs\Training2\cronjob.bat" & Chr(34), 0
Set WinScriptHost = Nothing