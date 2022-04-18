<?php 
 $page = 'projects';
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LightDream | Projects</title>
  <meta name="description" content="LightDream - Java, Python, C# Developer">
  <meta name="author" content="LightDream">

  <meta property="og:title" content="LightDream">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://lightdream.dev/">
  <meta property="og:description" content="LightDream - Java, Python, C# Developer">
  <meta property="og:image" content="image.png">

  <link rel="icon" href="/assets/images/root/favicon.ico">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mohave:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.4.95/css/materialdesignicons.min.css" integrity="sha512-RJM8wxxnhWj3XFj27wTSVh6GEPnKuRn4M7O8x/Rq5iCPwKn9UAZnsBLCvc/zS3LbKYD7h54X8GyS9fIxHJEhNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div id="page" class="float-nav">
    <?php include_once 'modules/nav.php'; ?>
    <div id="wrap">
        <div class="spacer"></div>
        <div class="section projects bg">
          <div class="container">
            <div class="pageTitle sm" data-aos="fade" data-aos-duration="1000">Projects</div>
            <div class="grid" data-aos="fade" data-aos-duration="1000">
              <div class="grid-card toggle-modal" data-toggle="modal" data-target="#projectModal">
                <div class="image"><img src="/assets/images/projects/original.png"></div>
                <div class="name">Original</div>
                <div class="ip">original.gg</div>
                <div class="prefix d-none">Server</div>
                <div class="text d-none">
                  IP: %ip% <br>
                  Online Players: %status% <br>
                  Current Position: Developer & Sys Admin & Head-Manager <br>
                  Duration: July 2021 -> Present <br>
                  <br>

                  <h3> Projetcs </h3>
                  
                  <!-- Not Released
                  <h5>
                    &emsp;• Control Panel ~ <a href="https://panel.original.gg" target="_balnk">Link</a>
                    <a href="https://github.com/L1ghtDream/ControlPanel" style="text-decoration: none; color: #39c7f1;" target="_blank">
                      <span class="mdi mdi-github"></span> 
                    </a>
                  </h5>
                  &emsp;&emsp;&emsp; A web application that lets the server managers and developers more easily interact with server
                  instances. The panel is mainly aimed at java processes, but it may support other processes as well that use a port. 
                  The panel lets the manager create new nodes ~ associated with new physical servers ~ as well as create new servers, 
                  or instances of java. Each server has its own permissions for each user, so one developer can have access only to 
                  what he needs to work on. The server allows created on SFTP servers on each node with custom credentials made with 
                  the permissions of each user on each server. Each server is started in a linux screen so in case of a web crash the 
                  servers will not have to suffer any damage. Each server can be accessed and has an open console (if the user has 
                  permission to see it), as well as start / stop / restart / kill actions and stats about the server as CPU, Memory, 
                  Storage usage and Memory allocation of the process (java only). As this is interacting directly with bare metal 
                  the system administrator has the option to force all the users to have 2fa (via Google otp) enabled. 
                  <br><br>
                  --> 

                  <h5>
                    &emsp;• TicketSystem
                    <a href="https://github.com/L1ghtDream/TicketSystem" style="text-decoration: none; color: #39c7f1;" target="_blank">
                      <span class="mdi mdi-github"></span> 
                    </a>
                  </h5>
                  &emsp;&emsp;&emsp; A discord bot system that allows the users to create and manager tickets from one centralized system.
                  It allows the separation of tickets in categories (by default general, donations, password, and top) as well as to allow
                  banned users to appeal their ban. As the normal discord ban removes the user completely from the server the system creates
                  a custom ban system that does not restrict the user from being able to be present on the server, but it removes all the 
                  roles of the user and gives him a banned role that only has access to the ban appeal ticket. 
                  <br>
                  <h6>
                  Additional features:
                  </h6>
                  <ul>
                  <li>Ticket transcripts</li> 
                  <li>Ticket user management</li> 
                  <li>Roles restoration if the user is unbanned</li> 
                  <li>Automatically closing inactive tickets</li> 
                  <li>Tickets blacklisting - Denying a player from creating new tickets</li> 
                  <li>User ban history</li> 
                  <li>User tickets history</li> 
                  </ul>

                  <h5>
                    &emsp;• User Dashboard ~ <a href="https://original.gg" target="_balnk">Link</a>
                    <a href="https://github.com/L1ghtDream/Panel" style="text-decoration: none; color: #39c7f1;" target="_blank">
                      <span class="mdi mdi-github"></span> 
                    </a>
                  </h5>
                  &emsp;&emsp;&emsp; A web application that lets any user better interact with staff members and their requests. The web 
                  applications is configured to deliver the user with the option to create staff applications, unban requests, create 
                  complains, report bugs and more.For staff members they can see all the above in a tab. For the login system as the panel 
                  is aimed at making easier to interface with your account on server, it uses the same password as the one from the server, 
                  thus making it impossible to impersonate someone.
                  <br><br>

                  <h5>
                    &emsp;• RoyalSecurity
                    <a href="https://github.com/L1ghtDream/RoyalSecurity" style="text-decoration: none; color: #39c7f1;" target="_blank">
                      <span class="mdi mdi-github"></span> 
                    </a>
                  </h5>
                  &emsp;&emsp;&emsp; A plugin that aims to protect your minecraft account even on non premium servers. It allows you to link
                  your minecraft account to your discord and receive notifications if someone connects to your account from a different ip.
                  If refused the ip will be blacklisted from the server for a period of time. If you get flooded with login attempts you
                  can lock down your account and every attempt to connect to your account will be automatically blacklisted. Also if you have
                  locked yourself out of your account by forgetting the password impossible as you can simply reset it on discord. This also
                  makes managing the rewards ar giveaways much easier to manager for admins as they can just check if you own the account.
                  <br>
                  <h6>
                  &emsp;&emsp;Additional features:
                  </h6>
                  <ul>
                  <li>Change password of linked account</li>
                  <li>Unregister accounts</li>
                  <li>Tebex payments history</li>
                  </ul>

                  <!--
                  <h5>&emsp;• TPS Helper</h5>
                  &emsp;&emsp;&emsp; A simple plugin that executes commands on TPS topics decrease and limits the 
                  number of armour stands on the same chunk to limit its use as a lag object. <br><br>

                  <h5>&emsp;• Original Crystals</h5>
                  &emsp;&emsp;&emsp; Custom currency plugin that supports ranks purchased via Tabex API using the currency <br><br>
                  
                  <h5>&emsp;• Kill Command</h5>
                  &emsp;&emsp;&emsp; Simple plugin to execute commands when a player kills another player. <br><br>

                  <h5>&emsp;• Punish Announce</h5>
                  &emsp;&emsp;&emsp; A simple plugin that allows you to announce any punishment in-game thru the help of discord via a bot <br><br>

                  <h5>&emsp;• Discord Announcer</h5>
                  &emsp;&emsp;&emsp; Simple discord JDA bot that sends a custom message on a custom timer <br><br>
                  -->

                </div>
              </div>
              <div class="grid-card toggle-modal" data-toggle="modal" data-target="#projectModal">
                <div class="image"><img src="/assets/images/projects/gaming_world.png"></div>
                <div class="name">Gaming World</div>
                <div class="ip">play.gamingworld.ro</div>
                <div class="prefix d-none">Server</div>
                <div class="text d-none">
                  IP: %ip% <br>
                  Online Players: %status% <br>
                  Current Position: Developer & Owner <br>
                  Duration: September 2020 -> February 2022<br>
                  <br>

                  <h3> Projetcs </h3>

                  <h5>
                    &emsp;• GWLevels
                    <a href="https://github.com/L1ghtDream/GWLevels" style="text-decoration: none; color: #39c7f1;" target="_blank">
                      <span class="mdi mdi-github"></span> 
                    </a>
                  </h5>
                  &emsp;&emsp;&emsp; This is a battle-pass based plugins based on PvP and PvE. You can acumulate XP by either killing mobs 
                  or players. You can use your xp to collect rewards from the battle-pass. The plugin also supports tops so you can create 
                  top battle-pass user. With 2 addons: A tag manager
                  &nbsp;  
                  <a href="https://github.com/L1ghtDream/GWLevels-TagManager" style="text-decoration: none; color: #39c7f1;" target="_blank">
                    <span class="mdi mdi-github"></span> 
                  </a>
                  &nbsp;
                  and a BedWars1058 one
                  &nbsp;
                  <a href="https://github.com/L1ghtDream/GWLevels-Minion-BedWars" style="text-decoration: none; color: #39c7f1;" target="_blank">
                    <span class="mdi mdi-github"></span> 
                  </a> <br><br>

                  
                  <h5>
                    &emsp;• AntiOP
                    <a href="https://github.com/L1ghtDream/AntiOP" style="text-decoration: none; color: #39c7f1;" target="_blank">
                      <span class="mdi mdi-github"></span> 
                    </a>
                  </h5>
                  &emsp;&emsp;&emsp; Simple Anti OP plugin. It can just banip players that have OP on the server. It can be helpfull if 
                  you have a bigger network and you have setup a permission based plugin and you want that to protect yourself against 
                  slipery plugins that op the author of that plugin. He will get banned on that specific account. <br><br>

                  <h5>
                    &emsp;• LastDonation - Crafting Store Addon
                    <a href="https://github.com/L1ghtDream/LastDonation-CraftingStore" style="text-decoration: none; color: #39c7f1;" target="_blank">
                      <span class="mdi mdi-github"></span> 
                    </a>
                  </h5>
                  &emsp;&emsp;&emsp; An usefuel addon for the owners that want to show of the donators on their server on their BungeeCord
                  MOTD. The plugins interfaces with the API of Crafting Store and updates at an interval the MOTD with the wanted message <br><br>                  

                  <h5>
                    &emsp;• TopDonator - Crafting Store Addon
                    <a href="https://github.com/L1ghtDream/TopDonator-CraftingStore" style="text-decoration: none; color: #39c7f1;" target="_blank">
                      <span class="mdi mdi-github"></span> 
                    </a>
                  </h5>
                  &emsp;&emsp;&emsp; An usefuel addon for the owners that want to show of the top donators on their server hub or on one of the 
                  server's section via an NPC that displays their name as a statue. The plugins interfaces with the API of Crafting Store 
                  and updates at an interval the NPCs.<br><br>                  
                </div>
              </div>
              <div class="grid-card toggle-modal" data-toggle="modal" data-target="#projectModal">
                <div class="image"><img src="/assets/images/projects/pokeninjas.png"></div>
                <div class="name">PokeNinjas</div>
                <div class="ip">playpokeninjas.com</div>
                <div class="prefix d-none">Server</div>
                <div class="text d-none">
                  IP: Not Released <br>
                  Online Players: Not Released <br>
                  Current Position: Developer & Sys Admin <br>
                  Duration: September 2020 -> Present <br>
                  <br>

                  <h3> Projetcs </h3>

                  <!-- Not Released
                  <h5>&emsp;• Kingdoms</h5>
                  &emsp;&emsp;&emsp; A friends plugin that also implements parties, chatting with them other interactions between players.
                  The plugin implements kingdoms management, users can create / destory kingdoms and invite / kick / leave kingdoms.
                  The plugins is made as a sponge plugin and implements a ProxyInterface that lets the plugin send the users across 
                  different servers on the proxy (presumably other kingdoms server instance), as well as allow comunications between servers
                  on the same proxy. The plugins hooks into the mod PixelmonGenerations to create new GUIs programatically, and display them 
                  to the user.
                  <br><br>
                  -->
                </div>
              </div>

              <div class="grid-card toggle-modal" data-toggle="modal" data-target="#projectModal">
                <div class="image"><img src="/assets/images/projects/snap_beasts.png"></div>
                <div class="name">SnapBeasts</div>
                <div class="ip">play.snapbeasts.com</div>
                <div class="prefix d-none">Server</div>
                <div class="text d-none">
                  IP: Not Released <br>
                  Online Players: Not Released <br>
                  Current Position: Developer & Manager <br>
                  Duration: September 2020 -> Present <br>
                  <br>

                  <h3> Projetcs </h3>

                  <h5>&emsp;• Friends</h5>
                  &emsp;&emsp;&emsp; A friends plugin that also implements parties, chatting with them other interactions between players <br><br>

                  <h5>&emsp;• Bungee Load Balancer </h5>
                  &emsp;&emsp;&emsp; A BungeeCord load balancer aimed to balance the amount of world file size is needed on each node of the server <br><br>
                
                  <h5>&emsp;• Realm </h5>
                  &emsp;&emsp;&emsp; A plotting plugin that borders the user in an aread that is also upgradable. <br><br>

                </div>
              </div>
              <div class="grid-card toggle-modal" data-toggle="modal" data-target="#projectModal">
                <div class="image"><img src="/assets/images/projects/gamster.png"></div>
                <div class="name">Gamster</div>
                <div class="ip">mc.gamster.org</div>
                <div class="prefix d-none">Server</div>
                <div class="text d-none">
                  IP: %ip% <br>
                  Online Players: %status% <br>
                  Current Position: Developer <br>
                  Duration: June 2020 -> August 2021 <br>
                  <br>

                  <h3> Projetcs </h3>

                  <h5>&emsp;• Database Sync</h5>
                  &emsp;&emsp;&emsp; A plugin that is used to commit the changes on a local database to a master database on an interval saving
                  bandwidth <br><br>

                  <h5>&emsp;• Murder Mystery </h5>
                  &emsp;&emsp;&emsp; Murder Mystery is a game of survival. Each round you are assigned one of three roles: Murderer, Sheriff or Innocent. 
                  The plugin also has some other features like sword throw, interactable enviroment for spectators, curency system, revive and chance offset
                  <br><br>

                </div>
              </div>
              <div class="grid-card toggle-modal" data-toggle="modal" data-target="#projectModal">
                <div class="image"><img src="/assets/images/projects/banana_prison.png"></div>
                <div class="name">BananaPrison</div>
                <div class="ip">mc.bananaprison.net</div>
                <div class="prefix d-none">Server</div>
                <div class="text d-none">
                  IP: %ip% <br>
                  Online Players: Project Canceled <br>
                  Current Position: Developer <br>
                  Duration: March 2021 -> August 2021 <br>
                  <br>

                  <h3> Projetcs </h3>

                  <h5>&emsp;• Prison Core</h5>
                  &emsp;&emsp;&emsp; A normal prison core that also includes some more querky features as pets, mine events, custom armour and 
                  currency, multipliers, leveling pickaxes and custom ranks <br><br>

                </div>
              </div>
              <div class="grid-card toggle-modal" data-toggle="modal" data-target="#projectModal">
                <div class="image"><img src="/assets/images/projects/surreal_craft.png"></div>
                <div class="name">SurrealCreaft</div>
                <div class="ip">play.surrealcraft.net</div>
                <div class="prefix d-none">Server</div>
                <div class="text d-none">
                  IP: %ip% <br>
                  Online Players: %status% <br>
                  Current Position: Developer <br>
                  Duration: March 2021 -> November 2021 <br>
                  <br>

                  <h3> Projetcs </h3>

                  <h5>&emsp;• SkyBlock Core</h5>
                  &emsp;&emsp;&emsp; A normal skyblock core that also includes some more querky features as custom spawners, minions, custom
                  island upgrades and custom skills <br><br>

                </div>
              </div>
              <!--
              <div class="grid-card toggle-modal" data-toggle="modal" data-target="#projectModal">
                <div class="image"><img src="/assets/images/projects/addicted2.png"></div>
                <div class="name">Addicted 2</div>
                <div class="prefix d-none">Server</div>
                <div class="text d-none">
                  Insert information.
                </div>
              </div>
              -->
              <div class="grid-card toggle-modal" data-toggle="modal" data-target="#projectModal">
                <div class="image"><img src="/assets/images/projects/chunkmc.png"></div>
                <div class="name">ChunkMC</div>
                <div class="ip">chunkmc.net</div>
                <div class="prefix d-none">Server</div>
                <div class="text d-none">
                  IP: %ip% <br>
                  Online Players: %status% <br>
                  Current Position: Developer <br>
                  Duration: June 2021 -> December 2021 <br>
                  <br>

                  <h3> Projetcs </h3>

                  <h5>&emsp;• Bounty Hunters</h5>
                  &emsp;&emsp;&emsp; A normal bounty plugin.<br><br>

                  <h5>&emsp;• Prison Core</h5>
                  &emsp;&emsp;&emsp; A normal prison core that also includes some more querky features as gangs, gang islands, custom cells, 
                  friends, gangs fights, cell mines, raidable cellsa and custom pickaxes <br><br>

                </div>
              </div>
              <div class="grid-card toggle-modal" data-toggle="modal" data-target="#projectModal">
                <div class="image"><img src="/assets/images/projects/citruspvp.png"></div>
                <div class="name">CitrusPvP</div>
                <div class="ip">play.citruspvp.com</div>
                <div class="prefix d-none">Server</div>
                <div class="text d-none">
                  IP: %ip% <br>
                  Online Players: %status% <br>
                  Current Position: Developer <br>
                  Duration: September 2021 -> Present <br>
                  <br>

                  <h3> Projetcs </h3>

                  <h5>&emsp;• Rock Paper Scissors </h5>
                  &emsp;&emsp;&emsp; A plugin that simulates a rock paper scissors game.<br><br>

                  <h5>&emsp;• Fishing</h5>
                  &emsp;&emsp;&emsp; A plugin that adds diversity to the fishing action in minecraft adding rarities and mutlipliers to 
                  fishies <br><br>

                  <h5>&emsp;• Roulete</h5>
                  &emsp;&emsp;&emsp; A plugin that simulates a roulete in minecraft <br><br>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <?php include_once 'modules/footer.php'; ?>
</div>
<a href="#" id="top">
    <i class="mdi mdi-arrow-up-thick"></i>
</a>
</body>
</html>