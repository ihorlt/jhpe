<?php include_once("header.php"); ?>

<div class="container">
	<div class="col-md-2">
		<?php include("papersList.php");?>
	</div>

	<div class="col-md-9 col-md-offset-1">

		<h4><strong>Modeling of fluid flow in pipeline with the leaks due to the surface</strong></h4>
		<h5>A.P. Oliynyk, L.O. Shtayer</h5>
		<h5><i>Pages 45 - 52</i></h5>
		<hr>
		<h4>Abstract</h4>
		<p>A mathematical model of viscous fluid flow in the pipeline with the presence of leaks due to their surface, which is based
on a system of Navier–Stokes equations in two-dimensional rectangular region with a special type of boundary conditions has
been designed. The geometric configuration of the leakage zone is taken into the account. It is believed that the fluid motion is
under the influence of constant length of pressure difference. For the solving of this system, the numerical method of finite
differences was developed by which the finite differences scheme is realized – the first step is implicit in longitudinal coordinate,
and the second – on the transversal. The study on the stability of the spectral features method, stability conditions are established
for the case of flow calculation with specified parameters and for the given type of the pipeline geometry. The calculations were
made for a wide class of boundary conditions that established the patterns of distribution of velocities in different configurations
and leakage areas in their absence, it was found that conspicuous effects of leaking occuring in the area around the pipe walls.</p>
		<p>The pattern of deviations from symmetry of the distribution of values of the longitudinal component was establishe, it depends on
the distance of the leak, of the speedchange of the zone near the pipe wall, it also depends on the leakage intensity and the
estimated parameters of the grid. It was set that the behavior of the flow in the zone near the wall after the longitudinal
component derivative turned zero. The results can be used in designing the localization of small oil leaks from different areas of
leakage configuration, the indicated technique can also be used in the study of utility and process piping in many different
industries. It was found that the developed method adequately describes the phenomenon. Directions for further research are as
follows: identification of dependencies different kinds of liquids, piping specifications, configuration leakage areas and
exploration of the case for more complex dependencies pressure on the coordinates of the investigated area.</p>
		<br/>
		<h4>Keywords</h4>
		<p>flow velocity, leakage coordinates, mathematical model, Navier–Stokes system, numerical method, stability</p>

	</div>	<!-- col-md-9 -->

</div> <!-- /container -->

<?php include_once("footer.php"); ?>