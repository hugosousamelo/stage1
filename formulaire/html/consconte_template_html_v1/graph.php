<?php 
session_start();
	require_once ('../../../jpgraph-4.2.1/src/jpgraph.php');
	require_once ('../../../jpgraph-4.2.1/src/jpgraph_pie.php');
	require_once ('../../../jpgraph-4.2.1/src/jpgraph_pie3d.php');
	
	$pourcentageContent=$_REQUEST['pourcentageContent'];
	$poucentIndecis=$_REQUEST['poucentIndecis'];
	$poucentMecontent=$_REQUEST['poucentMecontent'];
	// Some data
	$data = array($pourcentageContent,$poucentIndecis,$poucentMecontent);
	//$data = array(75,20,5,8,5);
	// Create the Pie Graph. 
	$graph = new PieGraph(300,211);

	$theme_class= new VividTheme;
	$graph->SetTheme($theme_class);


	// Create
	$p1 = new PiePlot3D($data);
	$graph->Add($p1);
	$p1->ShowBorder();
	$p1->SetColor('black');
	$p1->SetTheme('water');
	$p1->ExplodeSlice(0);
	$p1->SetSliceColors(array('#0FAD0F','#F5B109','red','#DC143C','#BA55D3'));
	$graph->Stroke();
	
?>
