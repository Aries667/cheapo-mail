{"changed":true,"filter":false,"title":"Logon_success.php","tooltip":"/Logon_success.php","value":"<?php\nsession_start();\nif(!session_is_registered(usrnm))\n{\nheader(\"location:index.php\");\n}\nelse\n{\nheader(\"location:homeScreen.php\");\n}\n?>\n","undoManager":{"mark":0,"position":48,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":21,"column":9},"action":"insert","lines":["<?php","session_start();","if(!session_is_registered(usrnm))","{","header(\"location:index.php\");","}","else","{","header(\"location:homeScreen.php\");","}","?>","","    Status","    API","    Training","    Shop","    Blog","    About","","    © 2014 GitHub, Inc.","    Terms","    Priva"]}]}],[{"group":"doc","deltas":[{"start":{"row":19,"column":3},"end":{"row":21,"column":9},"action":"remove","lines":[" © 2014 GitHub, Inc.","    Terms","    Priva"]}]}],[{"group":"doc","deltas":[{"start":{"row":19,"column":2},"end":{"row":19,"column":3},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":19,"column":1},"end":{"row":19,"column":2},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":19,"column":0},"end":{"row":19,"column":1},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":9},"end":{"row":18,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"remove","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":7},"end":{"row":17,"column":8},"action":"remove","lines":["u"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":6},"end":{"row":17,"column":7},"action":"remove","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":5},"end":{"row":17,"column":6},"action":"remove","lines":["b"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":4},"end":{"row":17,"column":5},"action":"remove","lines":["A"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":8},"end":{"row":17,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"remove","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"remove","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"remove","lines":["l"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"remove","lines":["B"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":8},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"remove","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"remove","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"remove","lines":["h"]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"remove","lines":["S"]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":14,"column":12},"end":{"row":15,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"remove","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"remove","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"remove","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"remove","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"remove","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"remove","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":14,"column":4},"end":{"row":14,"column":5},"action":"remove","lines":["T"]}]}],[{"group":"doc","deltas":[{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":13,"column":7},"end":{"row":14,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":13,"column":6},"end":{"row":13,"column":7},"action":"remove","lines":["I"]}]}],[{"group":"doc","deltas":[{"start":{"row":13,"column":5},"end":{"row":13,"column":6},"action":"remove","lines":["P"]}]}],[{"group":"doc","deltas":[{"start":{"row":13,"column":4},"end":{"row":13,"column":5},"action":"remove","lines":["A"]}]}],[{"group":"doc","deltas":[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":10},"end":{"row":13,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"remove","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":8},"end":{"row":12,"column":9},"action":"remove","lines":["u"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":7},"end":{"row":12,"column":8},"action":"remove","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"remove","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":5},"end":{"row":12,"column":6},"action":"remove","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"remove","lines":["S"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"remove","lines":["",""]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":11,"column":0},"end":{"row":11,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":20,"mode":"ace/mode/php"}},"timestamp":1418385747221}