<?php
// Team ID
if(!empty($_GET['team_id'])){  
    $team_id = $_GET['team_id'];      
}else{
    $team_id = '';
}
//  Team Venue ID
if(!empty($_GET['venue_id']) || $_GET['venue_id'] !=0){  
    $venue_id = $_GET['venue_id'];      
}else{
    $team_id = '';
}
//  Team key
if(!empty($_GET['team_key']) || $_GET['venue_id'] !=0){  
    $team_key = $_GET['team_key'];      
}else{
    $team_key = '';
}
// Team Name
if(!empty($_GET['team_name']) || $_GET['team_name'] !=0){  
    $team_name = $_GET['team_name'];      
}else{
    $team_name = '';
}
// Team Fullname
if(!empty($_GET['team_fullname']) || $_GET['team_fullname'] !=0){  
    $team_fullname = $_GET['team_fullname'];      
}else{
    $team_fullname = '';
}
// Team is active
if(!empty($_GET['team_active']) || $_GET['team_active'] !=0){  
    $team_active = $_GET['team_active'];      
}else{
    $team_active = '';
}
// Team area name
if(!empty($_GET['team_area_name'] || $_GET['team_area_name'] !=0)){  
    $team_area_name = $_GET['team_area_name'];      
}else{
    $team_area_name = '';
}
// Team venue name
if(!empty($_GET['team_venue_name']) || $_GET['team_venue_name'] !=0){  
    $team_venue_name = $_GET['team_venue_name'];      
}else{
    $team_venue_name = '';
}
// Team Gender
if(!empty($_GET['team_gender']) || $_GET['team_gender'] !=0){  
    $team_gender = $_GET['team_gender'];      
}else{
    $team_gender = '';
}
// Team Type
if(!empty($_GET['team_type']) || $_GET['team_type'] !=0){  
    $team_type = $_GET['team_type'];      
}else{
    $team_type = '';
}
// team address
if(!empty($_GET['team_address']) || $_GET['team_address'] != 0){  
    $team_address = $_GET['team_address'];      
}else{
    $team_address = '';
}
// team city
if(!empty($_GET['team_city']) || $_GET['team_city'] != 0){  
    $team_city = $_GET['team_city'];      
}else{
    $team_city = '';
}
// team_zip
if(!empty($_GET['team_zip']) || $_GET['team_zip'] != 0){  
    $team_zip = $_GET['team_zip'];      
}else{
    $team_zip = '';
}
// team_phone
if(!empty($_GET['team_phone']) || $_GET['team_phone'] != 0){  
    $team_phone = $_GET['team_phone'];      
}else{
    $team_phone = '';
}
// team_fax
if(!empty($_GET['team_fax']) || $_GET['team_fax'] != 0){  
    $team_fax = $_GET['team_fax'];      
}else{
    $team_fax ='';
}
// team_website
if(!empty($_GET['team_website']) || $_GET['team_website'] != 0){  
    $team_website = $_GET['team_website'];      
}
// team_email
if(!empty($_GET['team_email']) || $_GET['team_email'] != 0){  
    $team_email = $_GET['team_email'];      
}else{
    $team_email ='';
}
// team_founded
if(!empty($_GET['team_founded']) || $_GET['team_founded'] != 0){  
    $team_founded = $_GET['team_founded'];      
}else{
    $team_founded ='';
}

// team_clubcolor1
if(!empty($_GET['team_clubcolor1']) || $_GET['team_clubcolor1'] != 0){  
    $team_clubcolor1 = $_GET['team_clubcolor1'];      
}else{
    $team_clubcolor1 ='';
}

// team_clubcolor2
if(!empty($_GET['team_clubcolor2']) || $_GET['team_clubcolor2'] != 0){  
    $team_clubcolor2 = $_GET['team_clubcolor2'];      
}else{
    $team_clubcolor2 ='';
}

// team_clubcolor3
if(!empty($_GET['team_clubcolor3']) || $_GET['team_clubcolor3'] != 0){  
    $team_clubcolor3 = $_GET['team_clubcolor3'];      
}else{
    $team_clubcolor3 ='';
}


// team_nickname1
if(!empty($_GET['team_nickname1'] || $_GET['team_nickname3'] != 0)){  
    $team_nickname1 = $_GET['team_nickname1'];      
}else{
    $team_nickname1 ='';
}

// team_nickname2
if(!empty($_GET['team_nickname2'] || $_GET['team_nickname3'] != 0)){  
    $team_nickname2 = $_GET['team_nickname2'];      
}else{
    $team_nickname2 ='';
}

// team_nickname3
if(!empty($_GET['team_nickname3'] || $_GET['team_nickname3'] != 0)){  
    $team_nickname3 = $_GET['team_nickname3'];      
}else{
    $team_nickname3 ='';
}

// team_wiki
if(!empty($_GET['team_wiki'] || $_GET['team_wiki'] != 0)){  
    $team_wiki = $_GET['team_wiki'];      
}else{
    $team_wiki ='';
}

// team_wikimarkurl
if(!empty($_GET['team_wikimarkurl'] || $_GET['team_wikimarkurl'] != 0)){  
    $team_wikimarkurl = $_GET['team_wikimarkurl']; 
    // dump($team_wikimarkurl);     
}else{
    $team_wikimarkurl ='';
}

// team_wikimarkurl
if(!empty($_GET['team_globalteamId'] || $_GET['team_globalteamId'] != 0)){  
    $team_globalteamId = $_GET['team_globalteamId']; 
    // dump($team_globalteamId);     
}else{
    $team_globalteamId ='';
}

// if(!empty($_GET['player_name'] || $_GET['player_name'] != 0)){  
//     $player_name = $_GET['player_name']; 
       
// }else{
//     $player_name ='';
// }




// dump($team_globalteamId);