function showTermsLoading() {

    document.getElementById("querries").innerHTML = getLoadingHTML();
}

function htmlEntities(s) {
    return s.replace(/[\u00A0-\u9999<>\&]/gim, function(i) {
        return '&#' + i.charCodeAt(0) + ';';
    });
}


function getTerms() {
    showTermsLoading();
    var url = prod_api + "/get_terms_needing_answers.php?";

    var ls = document.getElementsByName("language_select");
    var language_filters = [];
    for (let i = 0; i < ls.length; i++) {
        if (ls[i].checked) {
            language_filters.push(ls[i].value);
        }
    }
    if (language_filters.length) {
        url += "&language_filters=" + language_filters.join(",");
    }
    makeRequest('GET', url).then(function(data) {
        var terms = JSON.parse(data);

        var html = "";
        for (let i = 0; i < terms.length; i++) {
            var bonus_points = '';
            if (terms[i].bonus) {

                var bonusText = "2x";
                if (terms[i].bonus == 2) {
                    var bonusText = "3x";
                }
                if (terms[i].bonus == 3) {
                    var bonusText = "5x";
                }
                var bonus_points = '<span class="bonus_points bonus_points_' + terms[i].bonus + '">' + bonusText + '</span>';
            }
            html += "<a target='_blank' href='https://www.google.com/search?q=" + encodeURI(terms[i].term).replace(/#/g, '%23') + "'><li>" + bonus_points + htmlEntities(terms[i].term) + "<span class='do_answer' style='float:right;'>Answer <i class='icon angle right'></i> </span></a></li>";

        }
        document.getElementById("querries").innerHTML = html;
    });


}
/*
var languageSelects = document.getElementsByName("languages_select_mine");
for(let i =0;i<languageSelects.length;i++){
    languageSelects[i].addEventListener('change', function(){
		abortRequests();
        getTerms();
    });
}
*/

makeRequest('GET', prod_api + "/get_user_code_languages.php").then(function(d) {
    var langs = JSON.parse(d);
    var html = '<div id="filters" value="filters"> <div class="side_header">My Languages</div>';

    for (var i = 0; i < langs.ucl.length; i++) {
        if (langs.ucl[i].enabled) {
            html += '<li><label><input onchange="abortRequests();getTerms();" type="checkbox" name="language_select" value="' + langs.ucl[i].lkey + '">' + langs.ucl[i].name + '</label></li>';
        }
    }
    html += '<div class="side_header">All Languages</div>';
    for (var i = 0; i < langs.ucl.length; i++) {
        if (!langs.ucl[i].enabled) {
            html += '<li><label><input onchange="abortRequests();getTerms();" type="checkbox" name="language_select" value="' + langs.ucl[i].lkey + '">' + langs.ucl[i].name + '</label></li>';
        }
    }

    document.getElementById("languages_select_mine").innerHTML = html;

});

getTerms();