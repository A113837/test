
	var typed2 = new Typed('#type7', {
	  strings: ['WELCOME', 'to the WORLD of ', '<strong> ROBOTIC</strong>'],
	  typeSpeed: 50,
	  backSpeed: 20,
	  fadeOut: true,
	  loop: true
	});

	$('#example').polygonizr({

	  // How long to pause in between new node-movements.
	  restNodeMovements: 1,

	  // When the cluster up<a href="https://www.jqueryscript.net/time-clock/">date</a>s, this sets speed of nodes.
	  duration: 2,

	  // Define the maximum distance to move nodes.
	  nodeMovementDistance: 150,

	  // The number of node nodes to print out.
	  numberOfNodes: 35,

	  // Define the maximume size of each node dot.
	  nodeDotSize: 2.1,

	  // Sets the ease mode of the movement: linear, easeIn, easeOut, easeInOut, accelerateDecelerate.
	  nodeEase: "easeOut",

	  // If true, the nodes will descend into place on load.
	  nodeFancyEntrance: false,

	  // Makes the cluster forms an ellipse inspired formation, random if true.
	  randomizePolygonMeshNetworkFormation: true,

	  // Define a formula for how to initialize each node dot's position.
	  specifyPolygonMeshNetworkFormation: function (i) {
	    var forEachNode = {
	        // Half a circle and randomized
	        x: this.canvasWidth - ((this.canvasWidth / 2) + (this.canvasHeight / 2) * Math.cos(i * (2 * Math.PI / this.numberOfNodes))) * Math.random(),
	        y: this.canvasHeight - (this.canvasHeight * (i / this.numberOfNodes))
	    };
	    return forEachNode;
	  },

	  // Number of relations between nodes.
	  nodeRelations: 3,

	  // The FPS for the whole canvas.
	  animationFps: 30,

	  // Sets the color of the node dots in the network (RGB).
	  nodeDotColor: "120, 155, 240",

	  // Sets the color of the node lines in the network (RGB).
	  nodeLineColor: "240, 255, 250",

	  // Sets the color of the filled triangles in the network (RGB).
	  //nodeFillColor: "100, 230, 250", option
	  nodeFillColor: "100, 230, 210",


	  // Sets the alpha level for the colors (1-0).
	  nodeFillAlpha: 1.0,

	  // Sets the alpha level for the lines (1-0).
	  nodeLineAlpha: 0.9,

	  // Sets the alpha level for the dots (1-0).
	  nodeDotAlpha: 0.5,

	  // Defines if the triangles in the network should be shown.
	  nodeFillSapce: true,

	  // Define if the active animation should glow or not (not CPU friendly).
	  nodeGlowing: false,

	  // Define the canvas size and css position.
	  canvasWidth: $(this).width(),
	  canvasHeight: $(this).height(),
	  canvasPosition: "absolute"
	  
	});


	$(document).animateScroll();  
	$('.animate').scrolla({
	  mobile: true
	}); 
