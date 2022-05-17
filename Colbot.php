<?php
   $title = "Rules";
   $date = "2022-05-16";
   $filename = "Rules.php";
   $banner = "N1GP Central Document";
   $description = "Rules page of central doc";
   $author = "Symes"
?>

<?php include 'CentralHeader.php';?>

<img src="Images/qbot2.png" alt="https://cdn.discordapp.com/attachments/535324535634001922/970709571528175636/unknown.png">

<p>Our Discord server has a helpful netnavi that will accept commands entered in chat.<br>
	Find out how to operate him by reading this guide.</p>
	
<p>Notice: For security, ColonelBot documents the user IDs of members who use certain commands.<br>
	Read all the details about it at the bottom of this page.</p>
	
<h2>Informational Commands</h2>

<p><b>!welcome -</b> Provides a link to the N1GP Central Doc, defaults to the FAQ tab.</p>

<p><b>!drive -</b> Provides a quick download link to the resources folder.</p>

<p><b>!radmin -</b> DMs the caller with the Radmin server credentials. You must have the Netbattler role equipped in order for this command to work. The use of this command is logged.</p>

<p><b>!guides -</b> DMs the person who calls the command with video guides, this guide, and more.</p>

<p><b>!victors -</b> Provides a link to the strategies used by previous event finalists and winners.</p>

<p><b>!legacy -</b> Provides a quick link to the legacy pvp setup guide.</p>

<p><b>!uninstall -</b> Posts a list of the NaviCust programs removed by the Uninstall chip in BN6.</p>

<p><b>!faq -</b> Alternative command name, has the same effect as !welcome.</p>

<br>
<h2>Matchmaking Commands</h2>

<p>These commands require that you have the Netbattler or Legacy Battler role equipped.</p>

<p><b>!atb -</b> Equips the temporary role "Available to Battle" which shows other players that you are currently available to play right now.</p>

<p><b>!unav -</b> Unequips the "Available to Battle" role.</p>

<p><b>!hostflip -</b> Flips a coin to decide whether you or your opponent will host a netbattle.<br>
	Supports tagging another player when using the command, in which case ColonelBot will tag the player who wins the coin toss. [syntax: !hostflip @username </p>
	
<br>
<h2>Equipping Roles</h2>

<p>These commands can be used to add or remove pingable roles in the N1GP Discord. To add them, simply enter the command. To unquip them, just enter the command again.</p>

<p><b>!license -</b> Equips the Netbattler role, showing that you're set up to play BN6 online pvp and wish to netbattle with others in the server.<br>
	Unlocks access to the Radmin/Hamachi credentials and matchmaking commands. It also gives permission to post and embed images in chat.</p>

<p><b>!linkcable -</b> Equips the Legacy Battler role, for members who have set up MultiGba S Emulator to play earlier BN games online. Unlocks access to the matchmaking commands.</p>

<br>
<h2>Tournament Commands</h2>

<p><b>!newmoon -</b> DMs the caller with the information for the current NEW MOON cycles.<br>
	Includes the sheets from the current cycle, a link to the vod submission form, and a link to the registration form for the next cycle.</p>
	
<p><b>!legs -</b> Equips the "Leg's MOON BATTLE" role. The same as "Available to Battle" except for MOON BATTLES instead of friendlies.</p>
	
<p><b>!unlegs -</b> Unequips the "Leg's MOON BATTLE" role.</p>

<br>
<h2>Chip Lookup</h2>

<p>To help with folder building, ColonelBot can display detailed info from the battlechip library of BN6.<br>
	Note that this feature is only for BN6 chips.</p>
	
<p><b>!lookup &ltchip name&gt -</b> To view the details about a certain chip, use this command followed by the name of a chip.<br>
	ColonelBot will search through both the abbreviated names and the full names of battlechips to find a match for the chip name you give.</p>

<p><b>!lookup code &ltcode&gt -</b> To view a list of all the chips in a certain code, use this command followed by a single letter to search for chip codes instead of chip names.</p>

<p><b>!modcard &ltcard name&gt -</b> To view the information of a specific Modcard.</p>


<br>
<h2>Privacy Notice</h2>

<p>For the sake of transparency, we are required by Discord's Terms of Service to inform you of the following:</p>

<p>All versions and revisions of ColonelBot collect User IDs of users who request Radmin or Hamachi information for security of the community (Suspicious floods of requests dictate a security event that requires us to change the Hamachi password to protect the community, usually followed by a cleaning out of the Hamachi Server).</p>

<p>Additionally, the Quotes system saves your User Name and User ID for Discord in order to maintain the authors of quotes.</p>

<p>The bot also maintains and modifies user roles (Available to Battle, Netbattler License, Official Battler). Though this is initiated by User interaction directly, we are required to disclose this functionality.</p>

<p>By continuing to participate in the N1 Grand Prix server, you agree to and grant express consent to the collecting of your username, Discord User ID, and chat messages (if it's even stored at all, "chat messages" refers to the saving of quotes).</p>