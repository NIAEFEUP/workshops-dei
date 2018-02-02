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
        let talk_title = talk.name.text;
        let talk_description = talk.name.description;

        let talk_utc = talk.start.utc.match(/(\d{4})-(\d{2})-(\d{2})T(\d{2}):(\d{2})/);
        let talk_date = `${talk_utc[3]}/${talk_utc[2]}/${talk_utc[1]}`;
        let talk_time = `${talk_utc[4]}h${talk_utc[5]}`;

        let talk_attrs = {'title': talk_title, 'desc': talk_description, 'date': talk_date, 'time': talk_time};
        create_talk_node(talk_attrs);
    });

}

function create_talk_node(attrs) {
    let node_article = document.createElement('article');
    let node_div = document.createElement('div');
    node_div.setAttribute('class', 'info');

    let node_h3 = document.createElement('h3');
    node_h3.innerHTML = attrs.title;

    let node_p = document.createElement('p');
    node_p.innerHTML = attrs.desc;

    let node_section = document.createElement('section');

    let node_span_date = document.createElement('span');
    
    let node_icon_1 = document.createElement('i');
    node_icon_1.setAttribute('class', 'far fa-calendar-alt');
    node_span_date.appendChild(node_icon_1);
    node_span_date.innerHTML += attrs.date;

    let node_span_time = document.createElement('span');
    
    let node_icon_2 = document.createElement('i');
    node_icon_2.setAttribute('class', 'far fa-clock');
    node_span_time.appendChild(node_icon_2);
    node_span_time.innerHTML += attrs.time;

    node_section.appendChild(node_span_date);
    node_section.appendChild(node_span_time);

    node_div.appendChild(node_h3);
    node_div.appendChild(node_p);
    node_div.appendChild(node_section);

    node_article.appendChild(node_div);
    
    node_article.innerHTML += '<input type="button" value="Select">';

    document.getElementById('workshop_grid').appendChild(node_article);
}

/* Encodes arguments to feed API. */
function ajax_dict_encoding(data) {
    return Object.keys(data).map(function(k) {
        return `${encodeURIComponent(k)}=${encodeURIComponent(data[k])}`;
    }).join('&');
}

load_scheduled_talks();