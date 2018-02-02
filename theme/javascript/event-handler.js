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

        let talk_attrs = {'title': talk_title, 'desc': talk_description, 'date': talk_date, 'time': talk_time, 'speaker': 'ademar'};
        create_talk_node(talk_attrs);
    });

}

function create_talk_node(attrs) {
    let node_article = document.createElement('article');
    let node_div_info = document.createElement('div');
    node_div_info.setAttribute('class', 'info');

    let node_div_col_sm = document.createElement('div');
    node_div_col_sm.setAttribute('class', 'col-sm');

    let node_div_container = document.createElement('div'),
        node_div_row = document.createElement('div'),
        node_div_w_100 = document.createElement('div'),

        node_div_col_calendar = document.createElement('div'),
        node_div_col_clock = document.createElement('div'),
        node_div_col_user = document.createElement('div');

    node_div_container.setAttribute('class', 'container');
    node_div_row.setAttribute('class', 'row');
    node_div_w_100.setAttribute('class', 'w-100');

    node_div_col_calendar.setAttribute('class', 'col');
    node_div_col_calendar.innerHTML = `<span><i class="far fa-calendar-alt"></i>${attrs.date}</span>`;

    node_div_col_clock.setAttribute('class', 'col');
    node_div_col_clock.innerHTML = `<span><i class="far fa-clock"></i>${attrs.time}</span>`;

    node_div_col_user.setAttribute('class', 'col');
    node_div_col_user.innerHTML = `<span><i class="fas fa-user"></i>${attrs.speaker}</span>`;

    node_div_row.appendChild(node_div_col_calendar);
    node_div_row.appendChild(node_div_col_clock);
    node_div_row.appendChild(node_div_w_100);
    node_div_row.appendChild(node_div_col_user);

    node_div_container.appendChild(node_div_row);

    node_div_info.innerHTML = `<h3>${attrs.title}</h3><p>${attrs.desc}</p>`;
    node_div_info.appendChild(node_div_container);

    node_article.appendChild(node_div_info);
    node_article.innerHTML += '<input type="button" value="Select">';

    node_div_col_sm.appendChild(node_article);

    document.getElementsByClassName('row')[0].appendChild(node_div_col_sm);
    
}

/* Encodes arguments to feed API. */
function ajax_dict_encoding(data) {
    return Object.keys(data).map(function(k) {
        return `${encodeURIComponent(k)}=${encodeURIComponent(data[k])}`;
    }).join('&');
}

load_scheduled_talks();