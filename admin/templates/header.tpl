<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>DeathHead:GB:Admin</title>
<script type="text/javascript" src="../dojo/dojo/dojo.js"
	djConfig="parseOnLoad:true"></script>
{section name=js loop=$jsscripts}
<script type="text/javascript" src="{$jsscripts[js]}"
	djConfig="parseOnLoad:true"></script>
{/section}
<script type="text/javascript">
dojo.require("dojo.fx");
dojo.require("dijit.form.Button");
{section name=dojo loop=$dojorequire}
dojo.require("{$dojorequire[dojo]}");
{/section}
	{literal} 
    function basicWipeinSetup() {
        //Function linked to the button to trigger the wipe.
        function wipeIt() {
            dojo.style("messagebox", "height", "");
            dojo.style("messagebox", "display", "block");
            var wipeArgs = {
                node: "messagebox"
            };
            dojo.fx.wipeOut(wipeArgs).play();
        }
        dojo.connect(dijit.byId("messageboxclosebutton"), "onClick", wipeIt);
    }

    dojo.addOnLoad(function() {
        {/literal} 
    	    basicWipeinSetup();
    	    {$dojoonloadcode}
    	    {literal} 
    }); {/literal}
	</script>
<style type="text/css">
{literal}
.menu {
	background-color: yellow;
}

.menu a {
	margin-left: 25px;
}
.tundra{
background-image: url(../images/bg.jpg);
background-repeat: no-repeat;

}
{/literal}
</style>
	<link rel="stylesheet" type="text/css" href="../dojo/dijit/themes/tundra/tundra.css" />
{section name=css loop=$allcss}
<link title="{$allcss[css]}" rel="stylesheet" type="text/css"
	href="{$allcss[css]}" />
{/section}
</head>
<body class="tundra" {$bodyargs}>