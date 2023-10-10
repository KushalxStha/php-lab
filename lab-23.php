<!-- Write a custom exception in PHP to confirm only students above 18 years can vote in college election. -->

<?php
class ElectionAgeException extends Exception {
    public function errorMessage() {
        return "Only students above 18 years of age can vote in the college election.";
    }
}

function checkVotingEligibility($age) {
    if ($age < 18) {
        throw new ElectionAgeException();
    } else {
        echo "You are eligible to vote in the college election.";
    }
}

try {
    $studentAge = 15; // Change the age to test eligibility
    checkVotingEligibility($studentAge);
} catch (ElectionAgeException $e) {
    echo "Error: " . $e->errorMessage();
}
?>