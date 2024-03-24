<?php
if(isset($_POST["submit"]))
{
    $university=$_POST["university"];
    $department=$_POST["department"];
    $faculty=$_POST["faculty"];
    $emp_id=$_POST["emp_id"];
    $author=$_POST["author"];
    $coAuthor=$_POST["co-author"];
    $paperTitle=$_POST["papertitle"];
    $journalName=$_POST["journalname"];
    $article=$_POST["article"];
    $region=$_GET["region"]; 
    $publicationDate=$_POST["publicationdate"];
    $pubYear=$_POST["pubyear"];
    $edition=$_POST["Edition"];
    $pageFrom=$_POST["from"];
    $pageTo=$_POST["to"];
    $impactFactor=$_POST["impact"];
    $listedInScopus=$_GET["listedInScopus"]; 
    $listedIn=$_GET["listedIn"];
    //$listedInWebScience=$_GET["listedInWebScience"]; 
    //$peerReviewed=$_GET["peerReviewed"];
    $issn=$_POST["issn"];
    $isbn=$_POST["isbn"];
    $publisherName=$_POST["publishername"];
    $affiliation=$_POST["affiliation"];
    $correspondAuthor=$_POST["correspondingauthor"];
    $citNumber=$_POST["citnumber"];
    $numOfCit=$_POST["noofcit"];
    $link=$_POST["link"];
    $upload=$_GET["upload"]; 
    $anyInfo=$_POST["anyinfo"];
    $ref=$_POST["ref"];
    $con=mysqli_connect("localhost","root","","form");
    $sql="INSERT INTO `research`(`university`, `department`, `facultyScientist`, `empId`, `authorName`, `coAuthor`, `paperTitle`, `journalName`, `researchPaper`, `region`, `publicationDate`, `publicationYear`, `volume`, `pageFrom`, `pageTo`, `impactFactor`, `listedInScopus`, `listedIn`, `issn`, `isbn`, `publisherName`, `institutionalAffiliations`, `correspondingAuthor`, `citationIndex`, `citationNumber`, `link`, `evidence`, `anyInfo`, `ref`) VALUES ('".$university."','".$department."','".$faculty."','".$emp_id."','".$author."','".$coAuthor."','".$paperTitle."','".$journalName."','".$article."','".$region."','".$publicationDate."','".$pubYear."','".$edition."','".$pageFrom."','".$pageTo."','".$impactFactor."','".$listedInScopus."','".$listedIn."','".$issn."','".$isbn."','".$publisherName."','".$affiliation."','".$correspondAuthor."','".$citNumber."','".$numOfCit."','".$link."','".$upload."','".$anyInfo."','".$ref."')";
    mysqli_query($con,$sql);
    echo "Data has been inserted successfully\n";
    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }
}
?>