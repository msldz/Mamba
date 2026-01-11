
<?php
//Ma manière de faire 
$reseau = [
    "twitter" => "https://twitter.com/BootstrapMade",
    "facebook" => "https://www.facebook.com/BootstrapMade",
    "instagram" => "https://www.instagram.com/bootstrapmade",
    "linkedin" => "https://www.linkedin.com/company/bootstrapmade",
];

foreach ($reseau as $NomReseau => $url){
    echo "<a href= '$url' class='$NomReseau' target='_blank'><i class='bi bi-$NomReseau'></i></a>";
}
?>
<?php 

$navigation = [
  "Home"=>"#hero",
  "About"=>"#about",
  "Services"=>"#services",
  "Portfolio"=>"#portfolio",
  "Team"=>"#team",
  "Contact"=>"#contact"
];

?>

<ul>
 <?php foreach ($navigation as $page => $ancre){?>

    <li><a class = "nav-link scrollto active" href="<?php echo "$ancre"?>"><?php echo "$page"?></a></li>
 
<?php } ?>
</ul>

<?php
//manière de l'ia avec un tableau multidimensionnel
$socials = [
          'twitter' => [
          'url' => 'https://twitter.com/BootstrapMade',
          'icon' => 'bi bi-twitter'
          ],
          'facebook' => [
          'url' => 'https://www.facebook.com/BootstrapMade',
          'icon' => 'bi bi-facebook'
          ],
          'instagram' => [
          'url' => 'https://www.instagram.com/BootstrapMade',
          'icon' => 'bi bi-instagram'
          ],
          'linkedin' => [
          'url' => 'https://www.linkedin.com/company/bootstrapmade',
          'icon' => 'bi bi-linkedin'
          ]
        ];
        
        foreach ($socials as $reseau => $infos){
          echo '<a href="'.$infos['url'].'" class="'.$reseau.'" target="_blank"><i class="'.$infos['icon'].'"></i></a>';
        }

        ?>