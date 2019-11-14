<?php

$pranges = [
    'https://d2leq0htz9909q.cloudfront.net/2018/10/05/16/10/46/782bb582-c31a-4139-a0e5-49a4d4c4693c/RackMultipart20181005-1-sj2pir.png?Expires=1573758806&Signature=QnZRwKd3sx-Vz1MnMaMGvUeTnIuIOUGInFJ6blenOUj~8uOnKoFC--5qlxBs8nqO6I~O~xHtwM5WF3iG4J3G45rVEkAN-43DbAE-vRw0nHjmKmPc8i0uR29LBrfQdpCKuD~lHT1LfIq6o29tKljpuklJ6pXKEHTlc35FZJKCX3EZngRgK45aXTCGjlMQM51dpUyho-~2UCxM2rPwJAxO5ACTZfUTE69l~XVQ72DzlkBgVdqh7do376RE9VwV9CUynG3DbJwQSz67Wf1ZyxVXoTe1jTHrDm0NIYZEo0y9it41TCKTqNnOKpGoqc7wxeAyxhB916Q7Gb50whYsbssdIQ__&Key-Pair-Id=APKAILIVQHXAC6ED4RWQ',
    'https://i.imgur.com/PWQJRuB.jpg',
    'https://i.imgur.com/kevgrSY.jpg',
    'https://i.imgur.com/PKqssSh.jpg',
    'https://i.imgur.com/bVvLemm.jpg'
];

function get_prange_id($excludeId = NULL) {
    global $pranges;
    $randId = array_rand($pranges, 1);
    while($randId == $excludeId) {
        $randId = array_rand($pranges, 1);
    }
    return $randId;
}

function get_prange($prangeId) {
    global $pranges;

    return $pranges[$prangeId];
};