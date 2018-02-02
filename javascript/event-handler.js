const   oauth_token = 'VQ72BNV3V2V76VFQZ5QC',
        admin_id = 'me';

let scheduled_talks = new Array();

function load_scheduled_talks() {
    let request = new XMLHttpRequest();
    request.onload = function() {
        parse_talk(request.responseText);
    }

    request.open('get', `https://www.eventbriteapi.com/v3/users/${admin_id}/owned_events/?token=${oauth_token}`, true);
    request.send();
}

function parse_talk(response) {
    let talk_dict = JSON.parse(response);
    let talks = new Array();
    
    talk_dict.events.forEach(talk => {
        let talk_name = talk.name.text;
        let talk_description = talk.name.description;

        let talk_utc = talk.start.utc.match(/(\d{4})-(\d{2})-(\d{2})T(\d{2}):(\d{2})/);
        let talk_date = `${talk_utc[3]}/${talk_utc[2]}/${talk_utc[1]}`;
        let talk_time = `${talk_utc[4]}h${talk_utc[5]}`;

        console.log(talk_date, talk_time);

        document.createElement('article');
        
    });

}

/* Encodes arguments to feed API. */
function ajax_dict_encoding(data) {
    return Object.keys(data).map(function(k) {
        return `${encodeURIComponent(k)}=${encodeURIComponent(data[k])}`;
    }).join('&');
}

load_scheduled_talks();