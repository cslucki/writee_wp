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

		<div class="site-container">
			<!-- Ajout de la barre de liens -->
			<div class="link-bar" style="text-align: left; font-family: inherit;">
					<a href="#" style="color: #25D366; font-weight: bold;">Nos groupes WhatsApp</a> : <br>
					<a href=https://chat.whatsapp.com/He0JMDN2E2TAuEzPYNfJmf style="font-weight: bold;">Groupe général</a> - 
					<a href="https://chat.whatsapp.com/H5Z7xaIPV3GJQGoUFHg62X">Communication</a>
				</div>
<!-- Fin de la barre de liens -->



		<div class="site-container text-center">
			<?php 
				//echo wp_kses_post(get_theme_mod('wrt_copyright')); 
			?>

			<hr>


			<!-- Ajout des liens mailto -->

			<div class="mailto-links">
			<a href=https://fpres.org/anges/>Anges gardiens</a> - 
			<a href="mailto:info@fpres.org?subject=Demande%20Info">Info</a> - 
			<a href="mailto:presse@fpres.org?subject=Contact%20Presse">Presse</a>
			</div>
			<!-- Fin des liens mailto -->

			<hr>
			<div  style="font-size: smaller; margin-top: 10px;">

			<a href=http://www.gnu.org/licenses/gpl.html>GNU General Public License v3.0</a>
			</div>

			

		</div>
	</div>
	
</footer><!-- / footer -->