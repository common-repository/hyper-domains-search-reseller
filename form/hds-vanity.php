<?php

// hds Full TDL List Shortcode to display search form on any page or post.


function add_form_hds_vanity(){



?>


<div class="hds_wrap">



<h4><?php $options = get_option('hds_options'); echo $options['text_string4'] ?></h4>



<form name="lookup"  action="<?php $options = get_option('hds_options'); echo $options['text_string1']?>/domain-registration/index.php" method="post" target="_new">


<input type="hidden" name="action" value="check_availability"> <p><em><input type="hidden" name="showrelated" value="true">

<input type="hidden" name="showrelated"  value="true">


        <input name="txtDomainName" type="text" placeholder="YourDomainHere..." maxlength="24" size="24" class="inputbox" >


        <b>.</b> 


        <select name="tld[]">
        
        
        
        
        <option value="academy" selected>academy</option>       
   
        <option value="accountant" selected>accountant</option>

        <option value="accountants" selected>accountants</option>

        <option value="actor">actor</option>       
     
        <option value="adult">adult</option>
               
        <option value="agency">agency</option>
               
        <option value="airforce">airforce</option>
                   
        <option value="amsterdam">amsterdam</option>
          
        <option value="apartments">apartments</option>
           
        <option value="army">army</option>
           
        <option value="associates">associates</option>
    
        <option value="attorney">attorney</option>

        <option value="auction">auction</option>

        <option value="audio">audio</option>
      
        <option value="band">band</option>

        <option value="bar">bar</option>
        
        <option value="bargains">bargains</option>

        <option value="beer">beer</option>

        <option value="berlin">berlin</option>
       
        <option value="best">best</option> 

        <option value="bid">bid</option>
       
        <option value="bike">bike</option>
       
        <option value="bingo">bingo</option>
       
        <option value="bio">bio</option>

        <option value="biz">biz</option>
    
        <option value="black">black</option>
     
        <option value="blackfriday">blackfriday</option>

        <option value="blue">blue</option>
      
        <option value="boutique">boutique</option>

        <option value="build">build</option>
      
        <option value="builders">builders</option>
   
        <option value="business">business</option>

        <option value="buzz">buzz</option>
        
        <option value="cab">cab</option>
      
        <option value="cafe">cafe</option>    
        
        <option value="camera">camera</option>
       
        <option value="camp">camp</option>
        
        <option value="capetown">capetown</option>
        
        <option value="capital">capital</option>
        
        <option value="cards">cards</option>
       
        <option value="care">care</option>
       
        <option value="career">career</option>
        
        <option value="careers">careers</option>
        
        <option value="casa">casa</option>
        
       <option value="cash">cash</option>
       
       <option value="casino">casino</option> 
       
       <option value="catering">catering</option>
       
       <option value="center">center</option>
       
       <option value="chat">chat</option>
       
       <option value="cheap">cheap</option>
       
       <option value="christmas">christmas</option>
       
       <option value="church">church</option>
             
       <option value="city">city</option>
       
       <option value="claims">claims</option>
       
       <option value="cleaning">cleaning</option>
       
       <option value="click">click</option>
       
       <option value="clinic">clinic</option>
       
       <option value="clothing">clothing</option>

       <option value="club">club</option>

       <option value="coach">coach</option>
        
       <option value="codes">codes</option>
         
       <option value="coffee">coffee</option>
         
       <option value="college">college</option>
     
       <option value="community">community</option>
        
       <option value="company">company</option>
         
       <option value="computer">computer</option>
        
       <option value="condos">condos</option>
        
       <option value="construction">construction</option>
         
       <option value="consulting">consulting</option>
         
       <option value="contractors">contractors</option>
       
       <option value="cooking">cooking</option>          
          
       <option value="cool">cool</option>          
          
       <option value="country">country</option>
         
       <option value="coupons">coupons</option>          
          
       <option value="credit">credit</option>
          
       <option value="creditcard">creditcard</option>

       <option value="cricket">cricket</option>        
        
        <option value="cruises">cruises</option>

        <option value="dance">dance</option>
        
        <option value="date">date</option>
        
        <option value="dating">dating</option>       

        <option value="deals">deals</option>
                
        <option value="degree">degree</option>       
        
        <option value="delivery">delivery</option>

        <option value="democrat">democrat</option>
        
        <option value="dental">dental</option>

        <option value="dentist">dentist</option>

        <option value="desi">desi</option>
        
        <option value="design">design</option>
        
        <option value="diamonds">diamonds</option>
        
        <option value="diet">diet</option>        
        
        <option value="digital">digital</option>
        
        <option value="direct">direct</option>
        
        <option value="directory">directory</option>
        
        <option value="discount">discount</option>
        
        <option value="dog">dog</option>
        
        <option value="domains">domains</option>
        
        <option value="download">download</option>
        
        <option value="durban">durban</option>
        
        <option value="education">education</option>
        
        <option value="email">email</option>
        
        <option value="energy">energy</option>

        <option value="engineer">engineer</option>
        
        <option value="engineering">engineering</option>
        
        <option value="enterprises">enterprises</option>
        
        <option value="equipment">equipment</option>
        
        <option value="estate">estate</option>
        
        <option value="events">events</option>
        
        <option value="exchange">exchange</option>
        
        <option value="expert">expert</option>
        
        <option value="exposed">exposed</option>
        
        <option value="express">express</option>
        
        <option value="fail">fail</option>
        
        <option value="faith">faith</option>
        
        <option value="farm">farm</option>
        
        <option value="fashion">fashion</option>
        
        <option value="finance">finance</option>
        
        <option value="financial">financial</option>
        
        <option value="fish">fish</option>
        
        <option value="fishing">fishing</option>

        <option value="fit">fit</option>

        <option value="fitness">fitness</option>
        
        <option value="flights">flights</option>
        
        <option value="florist">florist</option>

        <option value="flowers">flowers</option>
        
        <option value="football">football</option>
        
        <option value="forsale">forsale</option>
        
        <option value="foundation">foundation</option>
        
        <option value="fund">fund</option>
        
        <option value="furniture">furniture</option>

        <option value="futbol">futbol</option>
        
        <option value="fyi">fyi</option>
        
        <option value="gallery">gallery</option>
        
        <option value="game">game</option>

        <option value="garden">garden</option>

       <option value="gift">gift</option>
       
       <option value="gifts">gifts</option> 
       
       <option value="gives">gives</option>
       
       <option value="glass">glass</option>

        <option value="global">global</option>
        
        <option value="gold">gold</option>
        
        <option value="golf">golf</option>
        
        <option value="graphics">graphics</option>
        
        <option value="gratis">gratis</option>

        <option value="green">green</option>
        
        <option value="gripe">gripe</option>
        
        <option value="guide">guide</option>       

        <option value="guitars">guitars</option>
        
        <option value="guru">guru</option>        

        <option value="haus">haus</option>
        
        <option value="healthcare">healthcare</option>

        <option value="help">help</option>
    
       <option value="hiphop">hiphop</option>
       
       <option value="hockey">hockey</option>
       
       <option value="holdings">holdings</option>
       
       <option value="holiday">holiday</option>
 
       <option value="horse">horse</option> 

        <option value="host">host</option>

        <option value="hosting">hosting</option>
        
        <option value="house">house</option>
        
        <option value="immo">immo</option>
        
        <option value="industries">industries</option>
    
        <option value="ink">ink</option>
        
        <option value="institute">institute</option>
        
        <option value="insure">insure</option>
        
        <option value="international">international</option>
    
        <option value="investments">investments</option>
        
        <option value="irish">irish</option>
        
        <option value="jewelry">jewelry</option>

        <option value="jobs">jobs</option>
        
        <option value="juegos">juegos</option>
        
        <option value="kaufen">kaufen</option>

        <option value="kim">kim</option>
        
        <option value="kitchen">kitchen</option>
        
        <option value="kiwi">kiwi</option>

        <option value="la">la</option>
        
        <option value="land">land</option>

        <option value="lawyer">lawyer</option>
        
        <option value="lease">lease</option>
        
        <option value="legal">legal</option>
        
        <option value="life">life</option>
        
        <option value="lighting">lighting</option>
        
        <option value="limo">limo</option>
        
        <option value="limited">limited</option>

        <option value="link">link</option>
        
        <option value="live">live</option>

        <option value="loans">loans</option>
        
        <option value="lol">lol</option>

        <option value="london">london</option>
        
        <option value="love">love</option>

        <option value="luxury">luxury</option>
        
        <option value="maison">maison</option>
        
        <option value="management">management</option>

        <option value="market">market</option>
        
        <option value="marketing">marketing</option>
        
        <option value="markets">markets</option>
        
        <option value="mba">mba</option>
        
        <option value="me">me</option>
        
        <option value="media">media</option>
        
        <option value="memorial">memorial</option>
        
        <option value="men">men</option>

        <option value="menu">menu</option>
        
        <option value="money">money</option>

        <option value="moda">moda</option>

        <option value="mortgage">mortgage</option>

        <option value="name">name</option>
        
        <option value="navy">navy</option>
        
        <option value="network">network</option>
        
        <option value="news">news</option>

        <option value="ninja">ninja</option>

        <option value="nyc">nyc</option>
        
        <option value="one">one</option>
        
        <option value="online">online</option>

        <option value="ooo">ooo</option>
        
        <option value="partners">partners</option>
        
        <option value="parts">parts</option>

        <option value="party">party</option>

        <option value="pics">pics</option>

       <option value="pictures">pictures</option> 

        <option value="pink">pink</option>
        
        <option value="pizza">pizza</option>
        
        <option value="photography">photography</option>

        <option value="photo">photo</option>
        
        <option value="photos">photos</option>

       <option value="press">press</option> 
   
       <option value="property">property</option>
       
       <option value="place">place</option>
       
       <option value="plumbing">plumbing</option>
       
       <option value="plus">plus</option>
       
       <option value="poker">poker</option>
       
       <option value="press">press</option>
       
       <option value="pro">pro</option>
       
       <option value="productions">productions</option>
       
       <option value="properties">properties</option>
       
       <option value="property">property</option>
    
       <option value="pub">pub</option>

       <option value="quebec">quebec</option>
       
       <option value="racing">racing</option>
       
       <option value="recipes">recipes</option>

       <option value="red">red</option>
       
       <option value="rehab">rehab</option>
       
       <option value="reisen">reisen</option>
       
       <option value="rent">rent</option>
       
       <option value="rentals">rentals</option>
       
       <option value="repair">repair</option>
       
       <option value="report">report</option>
   
       <option value="rest">rest</option>
       
       <option value="review">review</option>

       <option value="reviews">reviews</option>
       
       <option value="rip">rip</option>

       <option value="rocks">rocks</option>

       <option value="rodeo">rodeo</option>
       
       <option value="run">run</option>

       <option value="sale">sale</option>
       
       <option value="school">school</option>  

       <option value="science">science</option> 

       <option value="site">site</option> 

       <option value="sexy">sexy</option>
       
       <option value="shoes">shoes</option>
       
       <option value="show">show</option>
       
       <option value="singles">singles</option>
       
       <option value="ski">ski</option>
       
       <option value="soccer">soccer</option>

       <option value="social">social</option>

       <option value="software">software</option>
       
       <option value="solar">solar</option>
       
       <option value="solutions">solutions</option>

       <option value="soy">soy</option> 

       <option value="space">space</option>
       
       <option value="studio">studio</option>
       
       <option value="style">style</option>
       
       <option value="supplies">supplies</option>
       
       <option value="supply">supply</option>
       
       <option value="support">support</option>

       <option value="surf">surf</option>
       
       <option value="surgery">surgery</option>
       
       <option value="systems">systems</option>
       
       <option value="tax">tax</option>
       
       <option value="taxi">taxi</option>
       
       <option value="team">team</option>

       <option value="tattoo">tattoo</option>

       <option value="tech">tech</option>
       
       <option value="technology">technology</option>
       
       <option value="tel">tel</option>
       
       <option value="tennis">tennis</option>
       
       <option value="theater">theater</option>
       
       <option value="tips">tips</option>

       <option value="tires">tires</option>
       
       <option value="today">today</option>

       <option value="tokyo">tokyo</option>
       
       <option value="tools">tools</option>
       
       <option value="top">top</option>
       
       <option value="tours">tours</option>
       
       <option value="town">town</option>
       
       <option value="toys">toys</option>

       <option value="trade">trade</option>
       
       <option value="training">training</option>
       
       <option value="tv">tv</option>

       <option value="uno">uno</option>

       <option value="vegas">vegas</option>
       
       <option value="ventures">ventures</option>
       
       <option value="vet">vet</option>

       <option value="video">video</option>
       
       <option value="villas">villas</option>
       
       <option value="vision">vision</option>

       <option value="vodka">vodka</option>
       
       <option value="vote">vote</option>
       
       <option value="voyage">voyage</option>
       
       <option value="wales">wales</option>

       <option value="wang">wang</option>
       
       <option value="watch">watch</option>

       <option value="webcam">webcam</option>

       <option value="website">website</option>   

       <option value="wedding">wedding</option>

       <option value="wiki">wiki</option>
       
       <option value="win">win</option>

      <option value="work">work</option>
      
      <option value="works">works</option>
      
      <option value="world">world</option>
      
      <option value="wtf">wtf</option>

      <option value="xyz">xyz</option>
      
      <option value="yoga">yoga</option>      
      
      <option value="zone">zone</option>



        </select>







        </td>







        







        <td><input type="submit"></td>







        </tr>







        </form>























<div style="clear:both"> </div>















</div>















<?php















}















add_shortcode('Vanity_Domains', 'add_form_hds_vanity');















?>