<?php 
/*************************************************************/
## Theme footer style 1. It's footer style, part of the theme.
## Modif Cyril  - on ajoute la barre de liens
/*************************************************************/


?>

<footer id="site-footer" class="site-footer">
	<?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3')): ?>
	<div class="site-footer-top">
		<div class="site-container">
			<div class="site-row">
				<div class="site-column-4">
					<?php dynamic_sidebar('footer-1'); ?>
				</div>
			
				<div class="site-column-4">
					<?php dynamic_sidebar('footer-2'); ?>
				</div>
			
				<div class="site-column-4">
					<?php dynamic_sidebar('footer-3'); ?>
				</div>
			
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div class="site-footer-bottom">

		<div class="site-container">
			<!-- Ajout de la barre de liens -->
			<div class="link-bar" style="text-align: left; font-family: inherit;">
					<a href="#" style="color: #25D366; font-weight: bold;">Nos groupes WhatsApp</a> : <br>
					<a href=https://chat.whatsapp.com/He0JMDN2E2TAuEzPYNfJmf style="font-weight: bold;">Groupe général</a> <br>
					<a href="https://chat.whatsapp.com/BLZEVcVbT7j3PByxg0XmVL">Le café de la réserve citoyenne</a><br>
					Partager : 
					<a href="https://chat.whatsapp.com/JdeEt5GVKeKBP6AHqljdBq">nos contenus sur les réseaux sociaux : l’amplificateur !</a> - 
					<a href="https://chat.whatsapp.com/IzQW2YS8RO4I98RZkKsb71">nos infos – agendas – contenus</a><br>
					Porte à porte : 
					<a href="https://chat.whatsapp.com/C370OWXTMTHKJSxAxlWWHi">dans le 4/5</a> - 
					<a href="https://chat.whatsapp.com/EioGqXS08i77SRyKGTYIlg">dans le 13/14</a> - 
					<a href="https://chat.whatsapp.com/DQLtL0IfMlV9SvBGwN8yP9">dans le 7/8</a><br>
					Tractages : 
					<a href="https://chat.whatsapp.com/GtiEMfOxNCECFSSlXgbbtd">dans le 4/5</a> - 
					<a href="https://chat.whatsapp.com/EFlQgRr1EuU6fuJS7BREeo">dans le 13/14</a> - 
					<a href="https://chat.whatsapp.com/EJi5C96EeZHJMtkVXEZSZH">dans le 7/8</a><br>
					Orga : 
					<a href="https://chat.whatsapp.com/FDtcQTHPLhPCoROwvN0LhT">Collages d’affiche</a><br>
					<a href="https://chat.whatsapp.com/H5Z7xaIPV3GJQGoUFHg62X">Communication</a><br>
					<a href="https://chat.whatsapp.com/HlEp4g38qQQE940IpJqRCK">Événements internes pour les bénévoles</a><br>
					<a href="https://chat.whatsapp.com/JAocKvwY8Hm0Egz0M1FklJ">Intervention lors des événements culturels / Fête de la musique</a><br>
					<a href="https://chat.whatsapp.com/J52LzslyQFQ3rZByfa5Gbu">Responsables de la distribution du matériel</a><br>
						<div>
						Contactez nos “anges gardiens” sur anges@fpres.org<br>
						</div>
				</div>
		</div>
<!-- Fin de la barre de liens -->



		<div class="site-container text-center">
			<?php 
				//echo wp_kses_post(get_theme_mod('wrt_copyright')); 
			?>

			<hr>


			<!-- Ajout des liens mailto -->
			<div class="mailto-links" style="font-size: smaller; margin-top: 10px;">
				<a href="mailto:anges@fpres.org?subject=Contact%20Ange%20gardien">Ange gardien</a><br>
				<a href="mailto:comm.reservecitoyenne13@gmail.com">comm.reservecitoyenne13@gmail.com</a><br>
				<a href="mailto:presse@fpres.org?subject=Contact%20Presse">Contact Presse</a>
			</div>
			<!-- Fin des liens mailto -->

			<hr>
			<a href=http://www.gnu.org/licenses/gpl.html>GNU General Public License v3.0</a>


			

		</div>
	</div>
	
</footer><!-- / footer -->