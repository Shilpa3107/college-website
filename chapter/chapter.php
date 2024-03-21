<!DOCTYPE html>
<html lang="en">
<head>
<style>
*{
    box-sizing: border-box;
}
body{
    overflow-x: hidden;
    font-size: larger;
    background-image:url(blurspot.png) ;
    background-repeat: no-repeat, no-repeat;
    background-size:100% 100%;
}
.maincontainer{
    margin-top: 3%;
    display: flex;
    flex-direction:column ;
    align-items: center;
    margin-right: 10%; 
    margin-left: 25%;
    background-color:#fdfdfd;
    border-radius: 20px;
	width:50%;
}

.hero{
    background-color:#fdfdfd;
    font-family:serif; 
    color:rgb(44, 41, 44);
    border-radius: 5px;
}
legend{
    transform: translateY(-2em);
    background-color: #fdfdfd;
    padding-left:7px;
    padding-right:7px;
    font-family:Tahoma;
    font-size: 1.5em;
	
}

.row {
    display: flex;
    gap:1em;
    width:100%;
    flex-direction: row;
    margin-top: 0.1rem ;
    margin-bottom: 1.5% ;
    border-radius: 5px;
    padding: 2px;
    align-items:center;
  }


  .prsnlinfo , .bookinfo, .fieldsetsectn{
    margin-top: 2%;
    margin-right: 10%;
    margin-left: 10%;
    padding:1em;
    display: flex;
    flex-direction:column ;
    justify-content: center;
    align-content: center;
    width:95%;
    background-color: #fdfdfd; 
    border-radius: 1em;
    border: 0;
    font-family: arial;
    font-size: 1em;
  }
.prsnlinfo {
    display:flex;
    align-content: space-between;
    justify-content: center;
    align-items: center;
    margin: 25px;
    box-shadow: 0 2px 5px rgba(118, 118, 118, 0.5);
}
.bookinfo{
    display:flex;
    align-content: space-between;
    justify-content: center;
    align-items: center;
    margin: 25px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
}

label{
    width:15%;
    font-size: 0.9em;
}
input{
    display: flex;
    flex-direction:column ;
    align-content: center;
    justify-content: center;
    align-items: center;
    width: 90%;
    height: 30px;
    border-radius: 3px;
    border-width:0.1em;
    border-color: #e0aaff;
    background-color: white;
    font-family:'';
    font-size: 1em;
}


select {
    width: 50%;
    font-size: 1.15rem;
    padding: 0.3em 0.8em;
    background-color: #fff;
    border: 1px solid #caced1;
    border-color: #e0aaff;
    border-radius: 0.25rem;
    color: #000;
    cursor: pointer;
}
.publicationdate{
    width:50%
}


.inputbox {
    position:relative;
    width:29%;
}

.inputbox span{
    transform: translateY(-100%);
    position:absolute;
    left:0;
    padding:0.5em;
    padding-left: 0.9em;
    padding-top:1em;
    pointer-events:none;
    font-size: 0.5em;
    color:rgb(186, 186, 186);
    text-transform: uppercase;
    transition: 0.2s ease-in-out ;
}

.inputbox input:valid ~ span,
.inputbox input:focus ~ span{
    color: #5a189a;
    transform: translateY(-3.8em) translateX(1em);
    font-size: 0.5em;
    padding: 0 10px;
    background-color: rgb(255, 255, 255);
    letter-spacing: 0.15em;
    font-family: serif;
}
.submit-button {
    background-color: rgb(150, 76, 199);
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-style: none;
    margin: 2%;
    transition:0.3s ;

  }
  .submit-button:hover {
    background-color: rgb(172, 112, 212);
    transform: scale(1.1);
    box-shadow:0 2px 5px rgba(0, 0, 0, 0.5); 
    color: black;
    transition:0.3s ;
  }
  .radio-options {
    display: inline-flex;
    align-items: center;
}

.radio-options input[type="radio"] {
    margin-right: 10px;
}
.radio-options label {
    margin-right: 10px; 
}
.row1{
   margin-left:50px;
   }
.inputbox {
        margin: 15px 0;
        padding: 0; 
    }
    .inputbox input {
        box-shadow: none; 
    }
 .row1 {
        margin-left: 0; 
    }

    @media only screen and (max-width: 768px) {
        .maincontainer {
            margin-left: 5%; 
            margin-right: 5%;
        }

        .inputbox {
            margin: 10px 0; 
        }
    }

    @media only screen and (max-width: 576px) {
        .maincontainer {
            width: 90%;
            margin-left: 5%; 
            margin-right: 5%;
        }

        .inputbox {
            margin: 5px 0; 
        }

        label,
        input,
        select {
            font-size: 0.8em;
        }

        .section {
            transform: none; 
        }

        .fieldsetsectn .row {
            flex-wrap: wrap; 
        }

        .fieldsetsectn .row > * {
            width: 100%; 
        }
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapters</title>
    <link rel="stylesheet" href="e_content.css">
</head>
<body>

<form action="" method="post">
<div class="maincontainer">
    <div class="hero">
          <h1>Chapters in Edited Volumes/Books Published by Faculty/ Scientist</h1>
        <hr>
    </div>
    <form action="" method="post">
    <div class="prsnlinfo">
        <fieldset class="fieldsetsectn">

            <legend class ="section">Personal Information</legend>
            <div class="row">
                <label for="university">University:</label>
                    <div class="inputbox">
                        <input type="text" name="university" required="required">
                        <span>University name</span>
                    </div>
            
                <label for="Department">Department:</label>
                    <div class="inputbox">
                        <input type="text" name="department" required >
                        <span>Department Name</span>
                    </div>
            </div>

            <div class="row">
                <label for="faculty">Faculty/ Scientist:</label>
                    <div class="inputbox">
                        <input type="text" name="faculty" required="required">
                        <span>Enter name </span>
                    </div>
            
                <label for="emp_id">Employee ID:</label>
                    <div class="inputbox">
                        <input type="number" name="emp_id" required="required" min="1" style="width:20%;">
                        <span>ID</span>
                    </div>
            </div>

            <div class="row">
                <label for="faculty">Name of other Author/s (If any):</label>
                    <div class="inputbox">
                        <input type="text" name="otherauthor" required="required">
                        <span>Other Author/s </span>
                    </div>
            
                <label for="emp_id">First/ Corresponding/ Co-author:</label>
                    <div class="inputbox">
                        <input type="text" name="co-author" required="required" min="1" >
                        <span>Please specify</span>
                    </div>
            </div>
            
        </fieldset>
    </div>

    <div class="bookinfo">
        <fieldset class="fieldsetsectn">

            <legend class ="section">Book Chapter Information</legend>
            <div class="row">
                <label for="booktitle">Title of the Book Chapter:</label>
                    <div class="inputbox">
                        <input type="text" name="booktitle" required="required">
                        <span>Title</span>
                    </div>
                        <label for="cars">Region:</label>
						 <div class="inputbox" id="select">
                            <select name="National" id="National">
                            <option value="National">National</option>
                            <option value="International">International</option>
                            </select>
                      </div>
            </div>

            <div class="row">
                 <label for="faculty">Publication Date:</label>
    <div class="publicationdate inputbox row1">
        <input type="date" name="publicationdate" required="required" style="width:150px;">
    </div>
            
                <label for="pubyear">Publication year:</label>
                    <div class="inputbox">
                        <input type="number" name="pubyear" required="required" min="1" >
                        <span>year</span>
                    </div>
            </div>

            <div class="row">
                <label for="Edition">Volume/Edition:</label>
                    <div class="inputbox">
                        <input type="number" name="Edition" required="required">
                        <span>Edition</span>
                    </div>
               <label for="co-author">Page</label>
                    <div class="inputbox">
                        <input type="number" name="from" required="required"  min="1">
                        <span>From</span>
                        <input type="number" name="to" required="required" min="2">
                        <span>To</span>
                    </div>
            </div>
            
        </fieldset>
        
    </div>
	<div class="prsnlinfo">
        <fieldset class="fieldsetsectn">

              <legend class="section">Other Information</legend>
                   <div class="row">
                    <label for="listed in scopus" >Listed in Scopus: </label>
                     <div class="radio-options">
                       <input name="radiobutton" type="radio" value="Yes" id="yes-option" />
                        <label for="yes-option">Yes</label>
                       <input name="radiobutton" type="radio" value="No" id="no-option" />
                        <label for="no-option">No</label>
                     </div>
                    
                       <label for="cars"  style="margin-left:100px">Listed in :</label>
					    <div class="inputbox" id="select">
                        <select name="National" id="National">
                          <option>UGC</option>
                          <option>PubMed</option>
                          <option>ICI</option>
                          <option>Others</option>
                        </select>
                     </div>
                    </div>
                    <div class="row">
                        <label for="faculty">Listed in Web of Science (Thomas Reuters) (Clarivate Analytics): </label>
                        <div class="radio-options">
                       <input name="radiobutton" type="radio" value="Yes" id="yes-option" />
                        <label for="yes-option">Yes</label>
                       <input name="radiobutton" type="radio" value="No" id="no-option" />
                        <label for="no-option">No</label>
                     </div>

                        <label for="emp_id" style="margin-left:100px">Peer Reviewed:</label>
                       <div class="radio-options">
                       <input name="radiobutton" type="radio" value="Yes" id="yes-option" />
                        <label for="yes-option">Yes</label>
                       <input name="radiobutton" type="radio" value="No" id="no-option" />
                        <label for="no-option">No</label>
                     </div>
                    </div>


            <div class="row">
                <label for="faculty">ISSN:</label>
                    <div class="inputbox">
                        <input type="text" name="otherauthor" required="required">
                        <span>ISSN </span>
                    </div>
            
                <label for="emp_id">ISBN:</label>
                    <div class="inputbox">
                        <input type="text" name="co-author" required="required" min="1" >
                        <span>ISBN</span>
                    </div>
            </div>
             <div class="row">
                <label for="faculty">Name of Publisher:</label>
                    <div class="inputbox">
                        <input type="text" name="otherauthor" required="required">
                        <span>Publisher name </span>
                    </div>
            
                <label for="emp_id">Institutional affiliations:</label>
                    <div class="inputbox">
                        <input type="text" name="co-author" required="required" min="1" >
                        <span>Institutional affiliations</span>
                    </div>
            </div>
			 <div class="row">
                <label for="faculty">Correponding Author:</label>
                    <div class="inputbox">
                        <input type="text" name="otherauthor" required="required">
                        <span>Correponding Author</span>
                    </div>
            
                <label for="emp_id">Citation Index:</label>
                    <div class="inputbox">
                        <input type="text" name="co-author" required="required" min="1" >
                        <span>Citation Index</span>
                    </div>
            </div>
			 <div class="row">
                <label for="faculty">Number of citations:</label>
                    <div class="inputbox">
                        <input type="text" name="otherauthor" required="required">
                        <span>Number of citations</span>
                    </div>
            
              <label for="emp_id">Evidence (Upload):</label>
          <div class="inputbox">
             <input type="file" name="upload" id="upload" required accept=".pdf, .doc, .docx"> 
            <span></span>
              </div>  
            </div>
			 <div class="row">
                <label for="faculty">If any other information:</label>
                    <div class="inputbox">
                        <input type="text" name="otherauthor" required="required">
                        <span>Any information</span>
                    </div>
            
                <label for="emp_id">Ref:</label>
                    <div class="inputbox">
                        <input type="text" name="co-author" required="required" min="1" >
                        <span>Ref</span>
                    </div>
            </div>
        </fieldset>
    </div>

    <button type="submit" class="submit-button">Submit</button>
</div>
</form>
</body>
</html>