<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>

<style>
	.aframe-container {
		width: 100%;
		height: 400px;
		border: none;
		overflow: hidden;
	}

	a-scene {
		width: 100%;
		height: 100%;
	}
</style>

<div class="aframe-container">
	<a-scene embedded background="color: #ECECEC">
		<!-- Define assets first for better performance -->
		<a-assets>
			<img id="my-image" src="https://sf-static.tiktokcdn.com/obj/eden-sg/uhtyvueh7nulogpoguhm/tiktok-icon2.png" crossorigin="anonymous">
		</a-assets>

		<!-- Place the image as a plane in 3D space -->
		<a-image
			src="#my-image"
			position="0 3.21 -3"
			width="5"
			height="5"
			material="shader: standard; side: front; roughness: 0.2; metalness: 0.3;">
		</a-image>

		<!-- Add a light to shine on the image -->
		<a-light
			type="point"
			color="#a07035"
			intensity=".1"
			position="0 1.520 1.870"
			angle="15"
			target=" #my-image">
		</a-light>


		<!-- Camera and controls -->
		<a-entity position="0 1.6 0">
			<a-camera></a-camera>
		</a-entity>

		<a-assets>
			<a-cubemap id="pisa">
				<img src="https://threejs.org/examples/textures/cube/pisa/px.png">
				<img src="https://threejs.org/examples/textures/cube/pisa/nx.png">
				<img src="https://threejs.org/examples/textures/cube/pisa/py.png">
				<img src="https://threejs.org/examples/textures/cube/pisa/ny.png">
				<img src="https://threejs.org/examples/textures/cube/pisa/pz.png">
				<img src="https://threejs.org/examples/textures/cube/pisa/nz.png">
			</a-cubemap>
		</a-assets>

		<a-light type="probe" envMap="#pisa"></a-light>
	</a-scene>
</div>