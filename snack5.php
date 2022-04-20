<?php
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
    $paragraph="By the numbers, Shanghai has been an exemplar of how to save lives during a pandemic. Despite the city’s more than 400,000 Covid-19 infections, just 17 people have died, according to officials, statistics they have touted as proof that their strategy of strict lockdowns and mass quarantines works.But those numbers may not give a complete picture of the outbreak’s toll. China typically classifies Covid-related deaths more narrowly than many other countries, labeling some chronically ill patients who die while infected as victims of those other conditions.In addition, a nearly three-week lockdown of China’s biggest city has limited access to medicine and care for other illnesses. A nurse who suffered an asthma attack died after being denied care because of virus controls. A 90-year-old man died of complications from diabetes after being turned away from an overwhelmed hospital.“If, at the time, he had been able to get treatment, he probably would have survived,” said the man’s granddaughter, Tracy Tang, a 32-year-old marketing manager.Residents and frontline workers have also been pushed to their limits by the policies. A hospital worker started bleeding internally after long hours conducting mass testing; she, too, died.Image
    It may never become clear how many similar stories there are. China does not release information on excess deaths, defined as the number of deaths — from Covid as well as other causes — exceeding the expected total in a given period. Public health scholars say that figure more accurately captures losses during the pandemic, as countries define Covid-related deaths differently.But as an example of the hidden impacts, a prominent Chinese physician recently estimated that nearly 1,000 more diabetes patients could die than expected during Shanghai’s lockdown, urging the authorities to take a more measured response.The outbreak there has revived questions about the true toll of Covid in China, which has officially reported fewer than 5,000 deaths from the coronavirus in two years.Beijing is unlikely to waver from its stringent approach. China’s leader, Xi Jinping, has made the country’s low death and infection rates central to his administration’s legitimacy. Officials have been fired after even a few cases were detected in their jurisdictions. Last week, Mr. Xi said that “prevention and control work cannot be relaxed.”The focus on minimizing Covid deaths risks incentivizing officials to neglect other causes of death, said Xi Chen, a professor of public health at Yale.“People pay overwhelmingly large attention to those more visible deaths,” he said. “But every death counts. They count equally.”";  
    $dividedParagraph=explode(".", $paragraph);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    <?php
    foreach($dividedParagraph as $sentence){
        echo $sentence . "." . "<br>";
    }
    ?>
</body>
</html>