<?php

require('app.php');
require('templates/header.php');

?>

<div class="ui red segment">
    <h1>Choose Your Authors</h1>
    <p>Enter the 5 people that you'd like to ask to author your yearbook entry. This can be changed until [DEADLINE], after then the 5 people will recieve a notification asking them to write a paragraph about you.</p>
</div>

<table class="ui celled striped table awards_table">
    <thead>
        <tr>
            <th>Pupil</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="authors" author_count="0">
        <tr>
            <td colspan="2">You haven't chosen any pupils yet</td>
        </tr>
    </tbody>
</table>

<div class="ui segment">

    <form class="ui form">
    
        <div class="ui small search">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Search students..." name="pupil" id="pupil_select"/>
                <i class="search icon"></i>
            </div>
        </div>
        
        <br/>
        
        <a class="ui positive button" id="add_pupil">Add Pupil</a>
    
    </form>    
    
</div>

<script>
    
var pupils = [

<?php

foreach(Pupil::getAllPupilNames() as $pupil) {
    echo "{ title: '" . str_replace("'", "\\'", htmlspecialchars($pupil)) . "' },\n";
}

?>
    
];
    
var pupils_basic = [

<?php

foreach(Pupil::getAllPupilNames() as $pupil) {
    echo "'" . str_replace("'", "\\'", htmlspecialchars($pupil)) . "',\n";
}

?>
    
];
    
var authors = [];
    
$("#add_pupil").click(function() {
        
    if($.inArray($("#pupil_select").val(), pupils_basic) == -1) {
        
        alert("Pupil not found");
        
    }else if($("#authors").attr("author_count") >=5) {
        
        alert("Max number of authors reached");
    
    }else if($("#pupil_select").val() == "<?php echo $User->firstname . " " . $User->secondname; ?>") {
    
        alert("You can't choose yourself as an author");
        
    }else if($.inArray($("#pupil_select").val(), authors) >= 0) {
        
        alert("Pupil already an author");
        
    }else {
        
        if($("#authors").attr("author_count") == 0) {
            $("#authors").html("");
        }
        
        var new_author = $("#pupil_select").val();
        
        $("#authors").html($("#authors").html() + '<tr><td>' + new_author + '</td><td><a href="javascript:remove_author()" author="' + new_author + '">remove</a></td></tr>');
        
        $("#authors").attr("author_count", parseInt($("#authors").attr("author_count")) + 1);
        
        authors.push(new_author);
        
    }
    
});
    
/* NEED TO DYNAMICALLY HOOK ONTO CLICK() */
    
function remove_author() {
    
    var selected_author = $(this).attr("author");
    
    alert(selected_author);
    
}

$('.ui.search')
  .search({
    source: pupils,
    onSelect: function(response) {
    }
  })
;
    
</script>

<?php

require('templates/footer.php');

?>