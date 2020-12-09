/**
 * Created by zikirillahi on 13/11/2015.
 */

//contact us
function complete(){
    alert("submitted successfully")
}
//participate
function invalid_password(){
    alert("invalid password")
}
function cant_verified(){
    alert("verification unsuccessful try again later. ")
}

function not_Student(){
    alert("all field required")
}

//election

function done(){
    alert("you've done this election")
    window.location="voting.php"
}

function not_verified(){
    alert("you are not authorized, you need verification")
    window.location="election_portal.php"
}
function invalid_verified(){
    alert("invalid verification details, click link below to know more about voter number")
    window.location="election_portal.php"
}
function unverified(){
    alert("sorry please obtain your VOTER NUMBER from Participate in HOmePage")
    window.location="home.php"
}

//log in
function invalid(){
    alert("invalid username/password combination.")


}
//admin
function inusername(){
    alert("candidate_id had already been selected.")
}
function uncomplete(){
    alert("can't add candidate try again later")
}
