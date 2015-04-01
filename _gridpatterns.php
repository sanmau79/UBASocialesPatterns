<!DOCTYPE html><html lang="es-es">

<head>
	<title>Style Guide </title>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- App Styles, NOT PROYECT STYLES! -->
	<link rel="stylesheet" type="text/css" href="_appstyles.css">	

	<!-- SITE STYLES -------------------------------------------------------------------------------------------------------->
	<link rel="stylesheet" type="text/css" href="Project/css/styles.css">
	<!-- SITE STYLES -------------------------------------------------------------------------------------------------------->

</head>

<body data-pattern="app-body" data-appstyles="app-page-style" data-specific-appstyle="app-grid-pattern">
	<div data-pattern="app-wrapper">

		<header role="banner" data-pattern="app-header">
			<div data-pattern="app-inner-wrapper">
				<nav role="navigation" >
					<a href="index.php"><img class="icon icons8-Back" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAA10lEQVRoge3auQ3DQAxE0R84VBHTpW+7FBegMlSU7yORYKwFJ1RAasEPLLDhvJyQZf9qgIX3iKk1QAe0zBgzIN79a33n2BJw4ot4AUfPQZZEpYiD5yBLokQ8SYRPokQ8gL3nIEuiUsTOc5AlUSLuJMInMUZsPQdZEiXiRiJ8EiXiCmw8B1kSlSLWnoMsiRJxIRE+iTFi5TnIkigRZ2aIgIogkJi4icTETCQmZiIxMRNjzNJz0JREYmImEhMzkZiYicTETCQmZr8HAx0VXD90/X/WNVSAyIY+B0Wxt8U2+0YAAAAASUVORK5CYII=" width="20" height="20">Volver</a>
					&nbsp;&nbsp;&nbsp;
					<a href="#patterns"><img class="icon icons8-Up" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAA2UlEQVRoge3YMQ6CMBiG4fcAHMAjMHoEb+vIwOjA4AEcHTyAx8CBEiwKFB34Sr43aUg69Un+tAngnHNupxVhZV0BXMPKFlMCZ6ANqwKOm57oh8aILDH9OLXAnQHxDN8sxmyMODBASjLBvI9TA5zCfg8h7DUIj9kUAmIICGPmEPAJAUHMEgK+Q0AIk4KAaQgIYFIRMA+BjTEV8RU71xIE4qu5/vt0K6qBG8sISINAh3nQvTGSpULkM0QtQ9QyRC1D1DJELUPUMkQtQ9QyRK3dQC50v3ucc8452V7o5H35liKTNwAAAABJRU5ErkJggg==" width="25" height="25">Subir</a>
				</nav><!--/.breadcrumb-nav-->
				<h1>Grid</h1>
				<p class="lede">Grid used for layout</p>
			</div>
		</header>

		<main role="main" data-pattern="app-main">
			<div data-pattern="app-inner-wrapper">
				<?php
				$files = array();
				$patterns_dir = "_gridpatterns";
				$handle = opendir($patterns_dir);
				while (false !== ($file = readdir($handle))):
					if(stristr($file,'.html')):
						$files[] = $file;
					endif;
				endwhile;
				sort($files);
				foreach ($files as $file):
					echo '<section class="pattern">';
					include($patterns_dir.'/'.$file);
					echo '<details class="pattern">';
					echo '<summary title="Show markup and usage">&#8226;&#8226;&#8226;</summary>';
					echo '<section>';
					echo '<textarea rows="10" cols="30" class="input code">'.htmlspecialchars(file_get_contents($patterns_dir.'/'.$file)).'</textarea>';
					echo '<p class="caption"><strong>Usage:</strong><br/> '.htmlspecialchars(@file_get_contents($patterns_dir.'/'.str_replace('.html','.txt',$file))).'</p>';
					echo '</section>';
					echo '</details><!--/.primer-->';
					echo '</section><!--/.pattern-->';
				endforeach;
				?>
			</div>
		</main><!--@main-->

	</div>
</body>
</html>