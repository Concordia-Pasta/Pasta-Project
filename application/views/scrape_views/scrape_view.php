<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo "$code $number $title" ?></title>
</head>
<body>
	<?php print_r($section); ?>
	<br />
    <br />
    Prerequisites:
	<?php print_r($prerequisite); ?> <br />
    <br />
	<!--<div id="container">
        <?php if(isset($title)): ?>
        	<h1><?php echo $name . ' ' . $number . ': ' . $title ?></h1>
            <?php echo anchor(site_url("/scrape"), "NEW SEARCH", null); ?>
            <hr />
    
            Prerequisites: <?php echo $prerequisite ?><br />
            <br />
        <?php else: ?>
         	<h2>Sorry, <?php echo $name." ".$number ?> is not available for this semester</h1>
        <?php endif; ?>

        <?php
            if(!empty($course_lecture)) {
                foreach ( $course_lecture as $lectureSection => $lectureInfo ) {
                    echo "Section: "  . $lectureSection 		 . '<br />' .
                         "Teacher: "  . $lectureInfo['Teacher']  . '<br />' .
                         "Location: " . $lectureInfo['Location'] . '<br />' .
                         "Time: " 	  . $lectureInfo['Time'] 	 . '<br />';
        			// TODO: Move in-line CSS into a CSS file.
        	        if(!empty($lectureInfo['Tutorials'])){
                    	foreach ( $lectureInfo['Tutorials'] as $tutorialSection => $tutorialInfo ) {
                        	echo '<div style="margin-left:50px; border:1px; border-style:solid;">';
                        	echo "Tutorial section: " . $tutorialSection 		  . '<br />' .
                                 "Location: " 		  . $tutorialInfo['Location'] . '<br />' .
                                 "Time: " 			  . $tutorialInfo['Time'];
                            
                            foreach( $tutorialInfo['Labs'] as $labSection => $labInfo ) {
                            	echo '<div style="margin-left:50px; border:1px; border-style:solid;">';
        	                    echo "Lab section: " . $labSection          . '<br />' .
               		                 "Location: "    . $labInfo['Location'] . '<br />' .
               		                 "Time: "    . $labInfo['Time']     . '<br />';
                                echo '</div>';
                            }
                           	
                           	echo '</div>';
                         }
                    } else if(!empty($lectureInfo["Labs"])) {
                    	foreach ( $lectureInfo['Labs'] as $tutorialSection => $tutorialInfo ){
                        	echo '<div style="margin-left:50px; border:1px; border-style:solid;">';
                            echo "Lab section: " . $tutorialSection .
                                 "<br> Location: " . $tutorialInfo['Location'] .
                                 "<br> Time: " . $tutorialInfo['Time'];
                            echo '</div>';
                        }
                    }
                }
            }
    
        ?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
-->
	</body>
</html>