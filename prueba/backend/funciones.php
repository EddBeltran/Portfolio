<?php

function get_data($url, $username, $password) {
    $post = [
        'user' => $username,
        'pwd' => $password, 
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    $response = curl_exec($ch);
    curl_close($ch);

	return (json_decode( $response, true ));
}

$clients_local = '
[
    {
        "id_cliente": "1170",
        "nombre": "YADI"
    },
    {
        "id_cliente": "1173",
        "nombre": "GARCIA"
    },
    {
        "id_cliente": "1176",
        "nombre": "QUINTANAR"
    },
    {
        "id_cliente": "1183",
        "nombre": "LA CAVA"
    },
    {
        "id_cliente": "1185",
        "nombre": "JOEL"
    },
    {
        "id_cliente": "1186",
        "nombre": "LA CONCHITA"
    },
    {
        "id_cliente": "1189",
        "nombre": "LOS PINOS"
    },
    {
        "id_cliente": "1191",
        "nombre": "SAN LORENZO"
    },
    {
        "id_cliente": "1195",
        "nombre": "REYES"
    },
    {
        "id_cliente": "1197",
        "nombre": "TEUTLI"
    },
    {
        "id_cliente": "1199",
        "nombre": "LA ROSA DEL SUR"
    },
    {
        "id_cliente": "1201",
        "nombre": "TRES HERMANOS"
    },
    {
        "id_cliente": "1202",
        "nombre": "EL PASO"
    },
    {
        "id_cliente": "1210",
        "nombre": "LOPEZ HERMANOS"
    },
    {
        "id_cliente": "1211",
        "nombre": "OSCAR"
    },
    {
        "id_cliente": "1213",
        "nombre": "LA CABANA"
    },
    {
        "id_cliente": "1214",
        "nombre": "EL TRIANGULO"
    },
    {
        "id_cliente": "1216",
        "nombre": "TELMITA"
    },
    {
        "id_cliente": "1229",
        "nombre": "CITLALI"
    },
    {
        "id_cliente": "1233",
        "nombre": "EL CALVARIO"
    },
    {
        "id_cliente": "1235",
        "nombre": "DONA CHAYO II"
    },
    {
        "id_cliente": "1238",
        "nombre": "OAXACA"
    },
    {
        "id_cliente": "1240",
        "nombre": "MEDINA"
    },
    {
        "id_cliente": "1242",
        "nombre": "DIANA"
    },
    {
        "id_cliente": "1255",
        "nombre": "EL NUEVO AMANECER"
    },
    {
        "id_cliente": "1260",
        "nombre": "EUCALIPTO"
    },
    {
        "id_cliente": "1261",
        "nombre": "FRONTERA"
    },
    {
        "id_cliente": "1263",
        "nombre": "LIZ"
    },
    {
        "id_cliente": "1264",
        "nombre": "MIACATLAN"
    },
    {
        "id_cliente": "1265",
        "nombre": "YOLIS"
    },
    {
        "id_cliente": "1270",
        "nombre": "LA LUPITA"
    },
    {
        "id_cliente": "1273",
        "nombre": "ZARATE"
    },
    {
        "id_cliente": "1277",
        "nombre": "ANGELITA"
    },
    {
        "id_cliente": "1278",
        "nombre": "UN REGALO DE DIOS"
    },
    {
        "id_cliente": "1281",
        "nombre": "LA HERENCIA"
    },
    {
        "id_cliente": "1282",
        "nombre": "MARIFER"
    },
    {
        "id_cliente": "1283",
        "nombre": "LA VECINA"
    },
    {
        "id_cliente": "1284",
        "nombre": "HI BYE"
    },
    {
        "id_cliente": "1286",
        "nombre": "LUPITA"
    },
    {
        "id_cliente": "1287",
        "nombre": "LA NUEVA"
    },
    {
        "id_cliente": "1288",
        "nombre": "EL MORO"
    },
    {
        "id_cliente": "1289",
        "nombre": "CRISTAL"
    },
    {
        "id_cliente": "1291",
        "nombre": "MAR"
    },
    {
        "id_cliente": "1292",
        "nombre": "MULTI TIENDA"
    },
    {
        "id_cliente": "1293",
        "nombre": "LOIDA"
    },
    {
        "id_cliente": "1295",
        "nombre": "MERLO"
    },
    {
        "id_cliente": "1296",
        "nombre": "CHELA"
    },
    {
        "id_cliente": "1297",
        "nombre": "EL LEON"
    },
    {
        "id_cliente": "1301",
        "nombre": "TONY"
    },
    {
        "id_cliente": "1302",
        "nombre": "EL CHANGARRITO"
    },
    {
        "id_cliente": "1304",
        "nombre": "LA CABANA"
    },
    {
        "id_cliente": "1308",
        "nombre": "SAN LORENZO"
    },
    {
        "id_cliente": "1311",
        "nombre": "SAURY"
    },
    {
        "id_cliente": "1314",
        "nombre": "PAQUITO"
    },
    {
        "id_cliente": "1321",
        "nombre": "LA PODEROSA"
    },
    {
        "id_cliente": "1326",
        "nombre": "TEQUILAS Y MEZCALES"
    },
    {
        "id_cliente": "1329",
        "nombre": "LOS 3 ASES"
    },
    {
        "id_cliente": "1332",
        "nombre": "LUNA"
    },
    {
        "id_cliente": "1333",
        "nombre": "ANGUEL"
    },
    {
        "id_cliente": "1337",
        "nombre": "VIKI"
    },
    {
        "id_cliente": "1350",
        "nombre": "MI GUADALUPITA"
    },
    {
        "id_cliente": "1401",
        "nombre": "EL 41"
    },
    {
        "id_cliente": "1409",
        "nombre": "LA FLOR DE MORELOS"
    },
    {
        "id_cliente": "1458",
        "nombre": "LA IMPERIAL"
    },
    {
        "id_cliente": "1484",
        "nombre": "VILLALONGIN"
    },
    {
        "id_cliente": "1495",
        "nombre": "LA DEPORTIVA"
    },
    {
        "id_cliente": "1565",
        "nombre": "EL RINOCERONTE"
    },
    {
        "id_cliente": "1648",
        "nombre": "PASTOR INGLES"
    },
    {
        "id_cliente": "1674",
        "nombre": "MIULLER"
    },
    {
        "id_cliente": "1696",
        "nombre": "BETY"
    },
    {
        "id_cliente": "1835",
        "nombre": "LAURITA"
    },
    {
        "id_cliente": "1963",
        "nombre": "EL COTI"
    },
    {
        "id_cliente": "1968",
        "nombre": "MOLE DON PANCHO"
    },
    {
        "id_cliente": "1969",
        "nombre": "JAVIER"
    },
    {
        "id_cliente": "1986",
        "nombre": "SAN MARTIN"
    },
    {
        "id_cliente": "1990",
        "nombre": "VANI"
    },
    {
        "id_cliente": "2004",
        "nombre": "LA POZA"
    },
    {
        "id_cliente": "2032",
        "nombre": "PATY"
    },
    {
        "id_cliente": "2037",
        "nombre": "CASA GARCIA"
    },
    {
        "id_cliente": "2039",
        "nombre": "LA CONSENTIDA II"
    },
    {
        "id_cliente": "2050",
        "nombre": "TLACATECPAC"
    },
    {
        "id_cliente": "2078",
        "nombre": "KABLAN"
    },
    {
        "id_cliente": "2102",
        "nombre": "LA AZTECA"
    },
    {
        "id_cliente": "2110",
        "nombre": "MARTINEZ"
    },
    {
        "id_cliente": "2905",
        "nombre": "ABARROTES GARCIA"
    },
    {
        "id_cliente": "2930",
        "nombre": "MI TIENDITA"
    },
    {
        "id_cliente": "2962",
        "nombre": "ELGIS"
    },
    {
        "id_cliente": "2974",
        "nombre": "COXTOCAN"
    },
    {
        "id_cliente": "2994",
        "nombre": "CARLITOS"
    },
    {
        "id_cliente": "2995",
        "nombre": "YAZMIN"
    },
    {
        "id_cliente": "2996",
        "nombre": "CHAPULTEPEC"
    },
    {
        "id_cliente": "2997",
        "nombre": "LOBITOS"
    },
    {
        "id_cliente": "2999",
        "nombre": "DIEGO"
    },
    {
        "id_cliente": "3000",
        "nombre": "DON PONCHO"
    },
    {
        "id_cliente": "3004",
        "nombre": "LA MESITA 77"
    },
    {
        "id_cliente": "3005",
        "nombre": "NERIA"
    },
    {
        "id_cliente": "3007",
        "nombre": "NORMA"
    },
    {
        "id_cliente": "3008",
        "nombre": "BENITO MACHELAS"
    },
    {
        "id_cliente": "3016",
        "nombre": "EL ARENAL"
    },
    {
        "id_cliente": "3017",
        "nombre": "LA ESCALERITA"
    },
    {
        "id_cliente": "3019",
        "nombre": "GABY"
    },
    {
        "id_cliente": "3022",
        "nombre": "LA CASITA"
    },
    {
        "id_cliente": "3025",
        "nombre": "LA MONTANA"
    },
    {
        "id_cliente": "3033",
        "nombre": "IMPERIUM 7 GRADOS"
    },
    {
        "id_cliente": "3038",
        "nombre": "EL PATO LOCO"
    },
    {
        "id_cliente": "3043",
        "nombre": "YULI"
    },
    {
        "id_cliente": "3044",
        "nombre": "EL CONSENTIDO"
    },
    {
        "id_cliente": "3053",
        "nombre": "ABRIL Y MITZI"
    },
    {
        "id_cliente": "3058",
        "nombre": "EL NUEVO PASO DEL CAMIONERO"
    },
    {
        "id_cliente": "3059",
        "nombre": "LA SANTISIMA"
    },
    {
        "id_cliente": "3082",
        "nombre": "ENRIQUE"
    },
    {
        "id_cliente": "3087",
        "nombre": "EL BORREGO SALVAJE"
    },
    {
        "id_cliente": "3099",
        "nombre": "LA MONTANA"
    },
    {
        "id_cliente": "3102",
        "nombre": "LA CONCHITA"
    },
    {
        "id_cliente": "3109",
        "nombre": "SURTITIENDA"
    },
    {
        "id_cliente": "3111",
        "nombre": "SIXTA"
    },
    {
        "id_cliente": "3127",
        "nombre": "SAN ANTONIO"
    },
    {
        "id_cliente": "3159",
        "nombre": "TABASCO"
    },
    {
        "id_cliente": "3163",
        "nombre": "MARIO"
    },
    {
        "id_cliente": "3168",
        "nombre": "NALLE"
    },
    {
        "id_cliente": "3169",
        "nombre": "CHATITA"
    },
    {
        "id_cliente": "3172",
        "nombre": "LONJA MERCANTIL"
    },
    {
        "id_cliente": "3180",
        "nombre": "KARLA"
    },
    {
        "id_cliente": "3181",
        "nombre": "ZARAGOZA"
    },
    {
        "id_cliente": "3183",
        "nombre": "LEO"
    },
    {
        "id_cliente": "3186",
        "nombre": "LA CHIQUITA"
    },
    {
        "id_cliente": "3194",
        "nombre": "EL PROGRESO"
    },
    {
        "id_cliente": "3196",
        "nombre": "ARCOIRIS"
    },
    {
        "id_cliente": "3204",
        "nombre": "VICTORIA"
    },
    {
        "id_cliente": "3206",
        "nombre": "JESSY"
    },
    {
        "id_cliente": "3232",
        "nombre": "ARACELI"
    },
    {
        "id_cliente": "3242",
        "nombre": "MARIA DEL CARMEN"
    },
    {
        "id_cliente": "3252",
        "nombre": "LESLIE"
    },
    {
        "id_cliente": "3256",
        "nombre": "BECERERRAS CASTILLO"
    },
    {
        "id_cliente": "3258",
        "nombre": "FLORECITA"
    },
    {
        "id_cliente": "3260",
        "nombre": "DENISSE"
    },
    {
        "id_cliente": "3261",
        "nombre": "EL DESAHOGO"
    },
    {
        "id_cliente": "3290",
        "nombre": "KARLA"
    },
    {
        "id_cliente": "3291",
        "nombre": "LA CARRETA"
    },
    {
        "id_cliente": "3323",
        "nombre": "PALMAS"
    },
    {
        "id_cliente": "3324",
        "nombre": "MI ANGEL"
    },
    {
        "id_cliente": "3331",
        "nombre": "ELOY"
    },
    {
        "id_cliente": "3345",
        "nombre": "AZTECA"
    },
    {
        "id_cliente": "3355",
        "nombre": "LA COLONIA"
    },
    {
        "id_cliente": "3356",
        "nombre": "NIVARDO"
    },
    {
        "id_cliente": "3357",
        "nombre": "JACSIRE"
    },
    {
        "id_cliente": "3363",
        "nombre": "LA GOTITA"
    },
    {
        "id_cliente": "3364",
        "nombre": "EL NUEVO SOL"
    },
    {
        "id_cliente": "3366",
        "nombre": "LA ESCONDIDA"
    },
    {
        "id_cliente": "3373",
        "nombre": "LARAS"
    },
    {
        "id_cliente": "3376",
        "nombre": "LAURITA"
    },
    {
        "id_cliente": "3380",
        "nombre": "LA PROVIDENCIA"
    },
    {
        "id_cliente": "3386",
        "nombre": "LEAL"
    },
    {
        "id_cliente": "3388",
        "nombre": "VIOLETA"
    },
    {
        "id_cliente": "3390",
        "nombre": "CRISTAL"
    },
    {
        "id_cliente": "3393",
        "nombre": "EL NEVADO"
    },
    {
        "id_cliente": "3397",
        "nombre": "REINA XOCHILT"
    },
    {
        "id_cliente": "3402",
        "nombre": "LOS PINITOS"
    },
    {
        "id_cliente": "3409",
        "nombre": "EL QUINQUE"
    },
    {
        "id_cliente": "3411",
        "nombre": "LONJA ALEX"
    },
    {
        "id_cliente": "3415",
        "nombre": "ABARROTES EL CENTRO"
    },
    {
        "id_cliente": "3425",
        "nombre": "DANY"
    },
    {
        "id_cliente": "3428",
        "nombre": "THE HOUSE"
    },
    {
        "id_cliente": "3430",
        "nombre": "EL TRENECITO"
    },
    {
        "id_cliente": "3438",
        "nombre": "RESTAURANT BAR EL BRACERITO"
    },
    {
        "id_cliente": "3439",
        "nombre": "RESTAURANT BAR EL BRACERO"
    },
    {
        "id_cliente": "3444",
        "nombre": "LA VENTANITA"
    },
    {
        "id_cliente": "3450",
        "nombre": "LAS LAURAS"
    },
    {
        "id_cliente": "3457",
        "nombre": "JUQUILITA"
    },
    {
        "id_cliente": "3458",
        "nombre": "LOS TORRES"
    },
    {
        "id_cliente": "3465",
        "nombre": "AGUILA"
    },
    {
        "id_cliente": "3467",
        "nombre": "RODRIGUEZ"
    },
    {
        "id_cliente": "3479",
        "nombre": "EL ESPANOL"
    },
    {
        "id_cliente": "3480",
        "nombre": "MIX OZUMBA"
    },
    {
        "id_cliente": "3481",
        "nombre": "LUPITA"
    },
    {
        "id_cliente": "3485",
        "nombre": "BAUTISTA"
    },
    {
        "id_cliente": "3487",
        "nombre": "EL PLEBELLO"
    },
    {
        "id_cliente": "3493",
        "nombre": "SANTA CECILIA"
    },
    {
        "id_cliente": "3501",
        "nombre": "ROSY"
    },
    {
        "id_cliente": "3505",
        "nombre": "LA CONCHITA"
    },
    {
        "id_cliente": "3508",
        "nombre": "MORALES"
    },
    {
        "id_cliente": "3515",
        "nombre": "LOS 3 GARCIAS"
    },
    {
        "id_cliente": "3518",
        "nombre": "FER"
    },
    {
        "id_cliente": "3521",
        "nombre": "VIC"
    },
    {
        "id_cliente": "3523",
        "nombre": "RUBI"
    },
    {
        "id_cliente": "3525",
        "nombre": "LA 20 DE NOVIEMBRE"
    },
    {
        "id_cliente": "3530",
        "nombre": "EL PROGRESO"
    },
    {
        "id_cliente": "3544",
        "nombre": "MI GLORIA"
    },
    {
        "id_cliente": "3546",
        "nombre": "LA CASITA"
    },
    {
        "id_cliente": "3547",
        "nombre": "TAPIA"
    },
    {
        "id_cliente": "3560",
        "nombre": "LAS DELICIAS"
    },
    {
        "id_cliente": "3565",
        "nombre": "EL COLIBRI"
    },
    {
        "id_cliente": "3575",
        "nombre": "ORTIZ"
    },
    {
        "id_cliente": "3583",
        "nombre": "ADRI"
    },
    {
        "id_cliente": "3589",
        "nombre": "EL PUMA"
    },
    {
        "id_cliente": "3590",
        "nombre": "LA REFORMA"
    },
    {
        "id_cliente": "3593",
        "nombre": "COMERCIAL VIENA"
    },
    {
        "id_cliente": "3594",
        "nombre": "QUETITA"
    },
    {
        "id_cliente": "3595",
        "nombre": "LA GRAN ESQUINA"
    },
    {
        "id_cliente": "3601",
        "nombre": "JUQUILITA"
    },
    {
        "id_cliente": "3603",
        "nombre": "DULCE MARIA LOPEZ"
    },
    {
        "id_cliente": "3607",
        "nombre": "EL JARDIN"
    },
    {
        "id_cliente": "3611",
        "nombre": "LA BALANZA MERCANTIL"
    },
    {
        "id_cliente": "3614",
        "nombre": "JULISSA"
    },
    {
        "id_cliente": "3617",
        "nombre": "DEPOSITO AGUILAR"
    },
    {
        "id_cliente": "3622",
        "nombre": "GLADY S"
    },
    {
        "id_cliente": "3634",
        "nombre": "ABARROTES LEYVA"
    },
    {
        "id_cliente": "3640",
        "nombre": "VICTORIA"
    },
    {
        "id_cliente": "3641",
        "nombre": "AVILIM"
    },
    {
        "id_cliente": "3642",
        "nombre": "EL BUEN SURTIDO"
    },
    {
        "id_cliente": "3645",
        "nombre": "CASA MARTINEZ"
    },
    {
        "id_cliente": "3650",
        "nombre": "ABARROTES LUIS YAEL"
    },
    {
        "id_cliente": "3651",
        "nombre": "ABARROTES EL CENTRO"
    },
    {
        "id_cliente": "3660",
        "nombre": "SUPER SMART"
    },
    {
        "id_cliente": "3667",
        "nombre": "LA NUEVA"
    },
    {
        "id_cliente": "3671",
        "nombre": "EL PORVENIR"
    },
    {
        "id_cliente": "3672",
        "nombre": "SAN JUAN"
    },
    {
        "id_cliente": "3674",
        "nombre": "EL BURRO PUNK"
    },
    {
        "id_cliente": "3675",
        "nombre": "DE IMPROVISO"
    },
    {
        "id_cliente": "3676",
        "nombre": "KIMBA"
    },
    {
        "id_cliente": "3677",
        "nombre": "EL PASO"
    },
    {
        "id_cliente": "3680",
        "nombre": "ACUARIO"
    },
    {
        "id_cliente": "3683",
        "nombre": "SAN JOSE"
    },
    {
        "id_cliente": "3690",
        "nombre": "JUANITO"
    },
    {
        "id_cliente": "3694",
        "nombre": "ADRIANITA"
    },
    {
        "id_cliente": "3697",
        "nombre": "MACONDO"
    },
    {
        "id_cliente": "3703",
        "nombre": "DON PACHO"
    },
    {
        "id_cliente": "3706",
        "nombre": "OSOLANDIA"
    },
    {
        "id_cliente": "3713",
        "nombre": "VINOSAURY TULYEHUALCO"
    },
    {
        "id_cliente": "3716",
        "nombre": "LA VICTORIA"
    },
    {
        "id_cliente": "3717",
        "nombre": "EL RINCON DE JOSE ALFREDO"
    },
    {
        "id_cliente": "3720",
        "nombre": "LAURA"
    },
    {
        "id_cliente": "3722",
        "nombre": "LOS CARRILLOS"
    },
    {
        "id_cliente": "3723",
        "nombre": "REINA"
    },
    {
        "id_cliente": "3724",
        "nombre": "ULISES"
    },
    {
        "id_cliente": "3727",
        "nombre": "BOLANOS"
    },
    {
        "id_cliente": "3728",
        "nombre": "MUNDO"
    },
    {
        "id_cliente": "3729",
        "nombre": "LA ESTRELLA"
    },
    {
        "id_cliente": "3732",
        "nombre": "ANDY"
    },
    {
        "id_cliente": "3734",
        "nombre": "ROYAN"
    },
    {
        "id_cliente": "3735",
        "nombre": "ISABEL"
    },
    {
        "id_cliente": "3737",
        "nombre": "MINI SUPER I"
    },
    {
        "id_cliente": "3738",
        "nombre": "4 REINAS"
    },
    {
        "id_cliente": "3744",
        "nombre": "LA PREFERIDA"
    },
    {
        "id_cliente": "3745",
        "nombre": "EL RINCONCITO"
    },
    {
        "id_cliente": "3748",
        "nombre": "EMIL"
    },
    {
        "id_cliente": "3749",
        "nombre": "LOS PINOS"
    },
    {
        "id_cliente": "3751",
        "nombre": "LUIS MIGUEL"
    },
    {
        "id_cliente": "3756",
        "nombre": "3 HERMANOS MARTINEZ"
    },
    {
        "id_cliente": "3757",
        "nombre": "CESARIN"
    },
    {
        "id_cliente": "3762",
        "nombre": "MI TIENDITA"
    },
    {
        "id_cliente": "3763",
        "nombre": "NUEVA IMAGEN"
    },
    {
        "id_cliente": "3764",
        "nombre": "LA TLAXCALTECA"
    },
    {
        "id_cliente": "3766",
        "nombre": "SAN JOSE"
    },
    {
        "id_cliente": "3769",
        "nombre": "LA ESTRELLITA"
    },
    {
        "id_cliente": "3771",
        "nombre": "DITRIBUIDORA GALLARDO"
    },
    {
        "id_cliente": "3772",
        "nombre": "MARTHA"
    },
    {
        "id_cliente": "3773",
        "nombre": "EL SACRIFICIO"
    },
    {
        "id_cliente": "3774",
        "nombre": "4 HERMANOS"
    },
    {
        "id_cliente": "3775",
        "nombre": "DEL CARMEN"
    },
    {
        "id_cliente": "3776",
        "nombre": "SAN JOSE I"
    },
    {
        "id_cliente": "3785",
        "nombre": "TERE"
    },
    {
        "id_cliente": "3786",
        "nombre": "DRINKSTOGO"
    },
    {
        "id_cliente": "3787",
        "nombre": "LA MIXTECA"
    },
    {
        "id_cliente": "3788",
        "nombre": "BENAVIDES"
    },
    {
        "id_cliente": "3790",
        "nombre": "LA ESPERANZA"
    },
    {
        "id_cliente": "3791",
        "nombre": "JAZMIN"
    },
    {
        "id_cliente": "3797",
        "nombre": "HERMANOS GONZALEZ"
    },
    {
        "id_cliente": "3799",
        "nombre": "LOS CERRILLOS"
    },
    {
        "id_cliente": "3801",
        "nombre": "ASHLEY"
    },
    {
        "id_cliente": "3805",
        "nombre": "JIMENEZ"
    },
    {
        "id_cliente": "3806",
        "nombre": "VADISA"
    },
    {
        "id_cliente": "3807",
        "nombre": "ROSIER"
    },
    {
        "id_cliente": "3810",
        "nombre": "LOS GIRASOLES"
    },
    {
        "id_cliente": "3811",
        "nombre": "ROSA"
    },
    {
        "id_cliente": "3812",
        "nombre": "DANY"
    },
    {
        "id_cliente": "3813",
        "nombre": "LUNA"
    },
    {
        "id_cliente": "3821",
        "nombre": "GABY"
    },
    {
        "id_cliente": "3824",
        "nombre": "SULAMITA"
    },
    {
        "id_cliente": "3826",
        "nombre": "KARLA"
    },
    {
        "id_cliente": "3829",
        "nombre": "LUNA"
    },
    {
        "id_cliente": "3830",
        "nombre": "SAN LUIS DE LAS FLORES"
    },
    {
        "id_cliente": "3832",
        "nombre": "SAN ISIDRO"
    },
    {
        "id_cliente": "3837",
        "nombre": "GUALMAR"
    },
    {
        "id_cliente": "3840",
        "nombre": "LA TAPATIA"
    },
    {
        "id_cliente": "3844",
        "nombre": "ESPERANZA I"
    },
    {
        "id_cliente": "3845",
        "nombre": "TORRES BODET"
    },
    {
        "id_cliente": "3846",
        "nombre": "ALEX I"
    },
    {
        "id_cliente": "3875",
        "nombre": "EL MARIACHI"
    },
    {
        "id_cliente": "3897",
        "nombre": "DRINKS"
    },
    {
        "id_cliente": "3899",
        "nombre": "ARACELI II"
    },
    {
        "id_cliente": "3957",
        "nombre": "LUISITO"
    },
    {
        "id_cliente": "4004",
        "nombre": "PABLO"
    },
    {
        "id_cliente": "4006",
        "nombre": "SAN MIGUEL"
    },
    {
        "id_cliente": "4189",
        "nombre": "PEDRO VERGARA"
    },
    {
        "id_cliente": "4195",
        "nombre": "ESTRADA"
    },
    {
        "id_cliente": "4197",
        "nombre": "TAPIA II"
    },
    {
        "id_cliente": "4220",
        "nombre": "ANGUS GRILL"
    },
    {
        "id_cliente": "4223",
        "nombre": "PRIVADA INES"
    },
    {
        "id_cliente": "4226",
        "nombre": "ALCATRAZ"
    },
    {
        "id_cliente": "4256",
        "nombre": "SANTA MARIA"
    },
    {
        "id_cliente": "4261",
        "nombre": "ANGELITO"
    },
    {
        "id_cliente": "4267",
        "nombre": "LA ROCA"
    },
    {
        "id_cliente": "4269",
        "nombre": "LA FORTALEZA"
    },
    {
        "id_cliente": "4279",
        "nombre": "DON POCHO"
    },
    {
        "id_cliente": "4281",
        "nombre": "NANCY"
    },
    {
        "id_cliente": "4283",
        "nombre": "IRVING"
    },
    {
        "id_cliente": "4284",
        "nombre": "EL MAPO"
    },
    {
        "id_cliente": "4292",
        "nombre": "ACUARIO"
    },
    {
        "id_cliente": "4306",
        "nombre": "EL NARANJITO"
    },
    {
        "id_cliente": "4307",
        "nombre": "LOS MENDOZA"
    },
    {
        "id_cliente": "4309",
        "nombre": "EL BUEN COMER CORENA"
    },
    {
        "id_cliente": "4312",
        "nombre": "REY DE COPAS"
    },
    {
        "id_cliente": "4313",
        "nombre": "LOS PEREZ"
    },
    {
        "id_cliente": "4323",
        "nombre": "MI ULTIMA COPA"
    },
    {
        "id_cliente": "4325",
        "nombre": "EL FARAON"
    },
    {
        "id_cliente": "4328",
        "nombre": "LUIS GILBERTO MONTEROLA RIOS"
    },
    {
        "id_cliente": "4335",
        "nombre": "LA DULCE VIDA"
    },
    {
        "id_cliente": "4337",
        "nombre": "JANETH"
    },
    {
        "id_cliente": "4340",
        "nombre": "VINOS MENDOZA"
    },
    {
        "id_cliente": "4343",
        "nombre": "MONTE BELLO"
    },
    {
        "id_cliente": "4346",
        "nombre": "EL GATO T"
    },
    {
        "id_cliente": "4355",
        "nombre": "JESUS"
    },
    {
        "id_cliente": "4366",
        "nombre": "EL CHAVO"
    },
    {
        "id_cliente": "4376",
        "nombre": "EL ENCANTO"
    },
    {
        "id_cliente": "4378",
        "nombre": "LA ESPERANZA"
    },
    {
        "id_cliente": "4379",
        "nombre": "SAN ANTONIO"
    },
    {
        "id_cliente": "4380",
        "nombre": "SAN FRANCISCO"
    },
    {
        "id_cliente": "4382",
        "nombre": "PAOLA II"
    },
    {
        "id_cliente": "4386",
        "nombre": "LA FLOR"
    },
    {
        "id_cliente": "4389",
        "nombre": "LA ESCONDIDA"
    },
    {
        "id_cliente": "4392",
        "nombre": "DEPOSITO LA PALMA"
    },
    {
        "id_cliente": "4395",
        "nombre": "IRMA"
    },
    {
        "id_cliente": "4406",
        "nombre": "LA PLAYA"
    },
    {
        "id_cliente": "4409",
        "nombre": "PAOLA"
    },
    {
        "id_cliente": "4412",
        "nombre": "PINEDA"
    },
    {
        "id_cliente": "4416",
        "nombre": "JUNIOR"
    },
    {
        "id_cliente": "4418",
        "nombre": "MARY"
    },
    {
        "id_cliente": "4420",
        "nombre": "GRILLO"
    },
    {
        "id_cliente": "4423",
        "nombre": "EL GRAN TACO"
    },
    {
        "id_cliente": "4426",
        "nombre": "LA ESCONDIDA"
    },
    {
        "id_cliente": "4427",
        "nombre": "PALOMA"
    },
    {
        "id_cliente": "4428",
        "nombre": "BELTRAN"
    },
    {
        "id_cliente": "4429",
        "nombre": "SERVI-VA"
    },
    {
        "id_cliente": "4442",
        "nombre": "CHUCHIN"
    },
    {
        "id_cliente": "4444",
        "nombre": "SERVICIO GAYTAN"
    },
    {
        "id_cliente": "4445",
        "nombre": "GABY"
    },
    {
        "id_cliente": "4446",
        "nombre": "LA ILUSION"
    },
    {
        "id_cliente": "4456",
        "nombre": "CLAUDIA"
    },
    {
        "id_cliente": "4458",
        "nombre": "DIANA"
    },
    {
        "id_cliente": "4465",
        "nombre": "EL PROVENIR"
    },
    {
        "id_cliente": "4466",
        "nombre": "ESPINOSA"
    },
    {
        "id_cliente": "4475",
        "nombre": "EL TUCAN"
    },
    {
        "id_cliente": "4476",
        "nombre": "CUAUHTEMOC"
    },
    {
        "id_cliente": "4477",
        "nombre": "LA HUASTECA"
    },
    {
        "id_cliente": "4479",
        "nombre": "IRAIS"
    },
    {
        "id_cliente": "4483",
        "nombre": "BOCANADA"
    },
    {
        "id_cliente": "4487",
        "nombre": "SAN MIGUEL"
    },
    {
        "id_cliente": "4497",
        "nombre": "NIETO"
    },
    {
        "id_cliente": "4517",
        "nombre": "MOLES CHIO"
    },
    {
        "id_cliente": "4519",
        "nombre": "NUXTLA"
    },
    {
        "id_cliente": "4523",
        "nombre": "PAULINA"
    },
    {
        "id_cliente": "4526",
        "nombre": "LOS ANGELES"
    },
    {
        "id_cliente": "4527",
        "nombre": "ALACRAN"
    },
    {
        "id_cliente": "4530",
        "nombre": "ANGEL"
    },
    {
        "id_cliente": "4534",
        "nombre": "CECY"
    },
    {
        "id_cliente": "4535",
        "nombre": "CHAFIS"
    },
    {
        "id_cliente": "4537",
        "nombre": "DEPOSITO SAN PEDRO"
    },
    {
        "id_cliente": "4539",
        "nombre": "TEMA"
    },
    {
        "id_cliente": "4542",
        "nombre": "EL COMPADRE"
    },
    {
        "id_cliente": "4547",
        "nombre": "ESPERANZA"
    },
    {
        "id_cliente": "4549",
        "nombre": "JUQUILITA"
    },
    {
        "id_cliente": "4550",
        "nombre": "LA BARRANCA"
    },
    {
        "id_cliente": "4553",
        "nombre": "LA PLACITA"
    },
    {
        "id_cliente": "4555",
        "nombre": "LAURITA"
    },
    {
        "id_cliente": "4562",
        "nombre": "MAX"
    },
    {
        "id_cliente": "4564",
        "nombre": "MORALES"
    },
    {
        "id_cliente": "4565",
        "nombre": "PADILLA"
    },
    {
        "id_cliente": "4576",
        "nombre": "CHARO"
    },
    {
        "id_cliente": "4579",
        "nombre": "LA MICHOACANA"
    },
    {
        "id_cliente": "4580",
        "nombre": "SUPER C"
    },
    {
        "id_cliente": "4581",
        "nombre": "LA ESCONDIDITA"
    },
    {
        "id_cliente": "4587",
        "nombre": "EL SEGUNDO"
    },
    {
        "id_cliente": "4589",
        "nombre": "LOS ARCOS"
    },
    {
        "id_cliente": "4592",
        "nombre": "WINDS"
    },
    {
        "id_cliente": "4595",
        "nombre": "DAISY"
    },
    {
        "id_cliente": "4605",
        "nombre": "LOS PANDITAS"
    },
    {
        "id_cliente": "4606",
        "nombre": "MARTELL"
    },
    {
        "id_cliente": "4613",
        "nombre": "ROSALES"
    },
    {
        "id_cliente": "4617",
        "nombre": "GARCES"
    },
    {
        "id_cliente": "4627",
        "nombre": "JUQUILITA"
    },
    {
        "id_cliente": "4635",
        "nombre": "FLOGAR"
    },
    {
        "id_cliente": "4646",
        "nombre": "JAZZ"
    },
    {
        "id_cliente": "4649",
        "nombre": "MINI SUPER MILPA ALTA"
    },
    {
        "id_cliente": "4650",
        "nombre": "MISCELANEA LIZZ"
    },
    {
        "id_cliente": "4652",
        "nombre": "MACK"
    },
    {
        "id_cliente": "4654",
        "nombre": "LA TAPATIA"
    },
    {
        "id_cliente": "4658",
        "nombre": "ITZAYANA"
    },
    {
        "id_cliente": "4661",
        "nombre": "ROMERO"
    },
    {
        "id_cliente": "4664",
        "nombre": "LA GITANA"
    },
    {
        "id_cliente": "4669",
        "nombre": "ELOKZOO"
    },
    {
        "id_cliente": "4677",
        "nombre": "MONCHIS"
    },
    {
        "id_cliente": "4678",
        "nombre": "LOS 3 PEQUES"
    },
    {
        "id_cliente": "4679",
        "nombre": "LAS FLORES"
    },
    {
        "id_cliente": "4686",
        "nombre": "PANHE"
    },
    {
        "id_cliente": "4690",
        "nombre": "PANTERA"
    },
    {
        "id_cliente": "4692",
        "nombre": "CRISANTEMA"
    },
    {
        "id_cliente": "4693",
        "nombre": "LA MADRILENA"
    },
    {
        "id_cliente": "4703",
        "nombre": "SANTA MARIA"
    },
    {
        "id_cliente": "4706",
        "nombre": "CASA RODRIGUEZ"
    },
    {
        "id_cliente": "4708",
        "nombre": "ABI"
    },
    {
        "id_cliente": "4720",
        "nombre": "BAR"
    },
    {
        "id_cliente": "4726",
        "nombre": "DANY"
    },
    {
        "id_cliente": "4727",
        "nombre": "SAN ISIDRO"
    },
    {
        "id_cliente": "4729",
        "nombre": "CRYSTAL"
    },
    {
        "id_cliente": "4736",
        "nombre": "LUCY"
    },
    {
        "id_cliente": "4738",
        "nombre": "LOS GARCIAS"
    },
    {
        "id_cliente": "4741",
        "nombre": "LA CABANA DEL TIO SAM"
    },
    {
        "id_cliente": "4749",
        "nombre": "CANO"
    },
    {
        "id_cliente": "4750",
        "nombre": "XALPA"
    },
    {
        "id_cliente": "4761",
        "nombre": "RINCON CHELERO"
    },
    {
        "id_cliente": "4763",
        "nombre": "EL CANELO"
    },
    {
        "id_cliente": "4766",
        "nombre": "LA ESPIGA SUPER"
    },
    {
        "id_cliente": "4767",
        "nombre": "ELY"
    },
    {
        "id_cliente": "4771",
        "nombre": "LA CURVA"
    },
    {
        "id_cliente": "4772",
        "nombre": "EL JJ II"
    },
    {
        "id_cliente": "4773",
        "nombre": "FAMILY FROG"
    },
    {
        "id_cliente": "4774",
        "nombre": "LOS COCHEPOS"
    },
    {
        "id_cliente": "4778",
        "nombre": "CHARLY"
    },
    {
        "id_cliente": "4784",
        "nombre": "LA UNIVERSIDAD"
    },
    {
        "id_cliente": "4788",
        "nombre": "ANAHI"
    },
    {
        "id_cliente": "4791",
        "nombre": "LA PEQUENA"
    },
    {
        "id_cliente": "4792",
        "nombre": "MICHELADAS LA CURVA"
    },
    {
        "id_cliente": "4801",
        "nombre": "CASA BLANCA"
    },
    {
        "id_cliente": "4808",
        "nombre": "LA PASADITA"
    },
    {
        "id_cliente": "4820",
        "nombre": "LA CASCADA II"
    },
    {
        "id_cliente": "4828",
        "nombre": "LA HIDALGUENSE II"
    },
    {
        "id_cliente": "4836",
        "nombre": "EL CENTRO"
    },
    {
        "id_cliente": "4838",
        "nombre": "IC"
    },
    {
        "id_cliente": "4840",
        "nombre": "AMORES DE DON JUAN"
    },
    {
        "id_cliente": "4841",
        "nombre": "MI LUPITA"
    },
    {
        "id_cliente": "4847",
        "nombre": "LEURI"
    },
    {
        "id_cliente": "4853",
        "nombre": "LA HACIENDA"
    },
    {
        "id_cliente": "4854",
        "nombre": "ABARROTES JESSY"
    },
    {
        "id_cliente": "4857",
        "nombre": "PARADISSE"
    },
    {
        "id_cliente": "4861",
        "nombre": "RICAS CARNITAS EL TIGRE"
    },
    {
        "id_cliente": "4873",
        "nombre": "LA CENTRAL"
    },
    {
        "id_cliente": "4876",
        "nombre": "CREMERIA LOS 5 HERMANOS"
    },
    {
        "id_cliente": "4877",
        "nombre": "RAMIREZ III"
    },
    {
        "id_cliente": "4891",
        "nombre": "GRUPO TH"
    },
    {
        "id_cliente": "4894",
        "nombre": "GEMA"
    },
    {
        "id_cliente": "4906",
        "nombre": "COCINA PATY"
    },
    {
        "id_cliente": "4910",
        "nombre": "PEPE"
    },
    {
        "id_cliente": "4915",
        "nombre": "ABARROTES MARY TERE"
    },
    {
        "id_cliente": "4931",
        "nombre": "ABARROTES 4 HERMANOS"
    },
    {
        "id_cliente": "4933",
        "nombre": "PREMIERE"
    },
    {
        "id_cliente": "4935",
        "nombre": "LA ESQUINITA"
    },
    {
        "id_cliente": "4938",
        "nombre": "LA DEL CENTRO"
    },
    {
        "id_cliente": "4940",
        "nombre": "PALACIOS"
    },
    {
        "id_cliente": "4941",
        "nombre": "LA LUNA"
    },
    {
        "id_cliente": "4949",
        "nombre": "LA GUADALUPANA"
    },
    {
        "id_cliente": "4966",
        "nombre": "VILLA"
    },
    {
        "id_cliente": "4969",
        "nombre": "LA OLVIDADA"
    },
    {
        "id_cliente": "4975",
        "nombre": "WILLY"
    },
    {
        "id_cliente": "4982",
        "nombre": "EL CENTRO"
    },
    {
        "id_cliente": "4983",
        "nombre": "MIA"
    },
    {
        "id_cliente": "4993",
        "nombre": "LA PASADITA 2"
    },
    {
        "id_cliente": "4997",
        "nombre": "CAMACHITOS"
    },
    {
        "id_cliente": "4998",
        "nombre": "YOSS"
    },
    {
        "id_cliente": "5007",
        "nombre": "LA HIDALGUENSE HUICALCO"
    },
    {
        "id_cliente": "5009",
        "nombre": "LA ESTACION DE AYAPANGO"
    },
    {
        "id_cliente": "5014",
        "nombre": "BODEGA OZUMBA"
    },
    {
        "id_cliente": "5015",
        "nombre": "CUTZAMALA"
    },
    {
        "id_cliente": "5019",
        "nombre": "BARUJA"
    },
    {
        "id_cliente": "5026",
        "nombre": "CENTENARIO"
    },
    {
        "id_cliente": "5029",
        "nombre": "MISCELANEA MARIA JOSE"
    },
    {
        "id_cliente": "5037",
        "nombre": "GRUPO TREHER SA DE CV"
    },
    {
        "id_cliente": "5047",
        "nombre": "LAS PALMERAS"
    },
    {
        "id_cliente": "5053",
        "nombre": "LOS TONOS"
    },
    {
        "id_cliente": "5061",
        "nombre": "JAMILET"
    },
    {
        "id_cliente": "5063",
        "nombre": "ABY"
    },
    {
        "id_cliente": "5069",
        "nombre": "BELEM"
    },
    {
        "id_cliente": "5080",
        "nombre": "JESSY"
    },
    {
        "id_cliente": "5082",
        "nombre": "CAFFE LATTE"
    },
    {
        "id_cliente": "5083",
        "nombre": "DON LUPE"
    },
    {
        "id_cliente": "5084",
        "nombre": "MICHELADAS COCOTITLAN"
    },
    {
        "id_cliente": "5090",
        "nombre": "CHERRY"
    },
    {
        "id_cliente": "5096",
        "nombre": "RAPSODIA"
    },
    {
        "id_cliente": "5098",
        "nombre": "TEXCALAPA"
    },
    {
        "id_cliente": "5102",
        "nombre": "PAOLA III"
    },
    {
        "id_cliente": "5103",
        "nombre": "PAVIS"
    },
    {
        "id_cliente": "5109",
        "nombre": "LA EXCELENCIA"
    },
    {
        "id_cliente": "5110",
        "nombre": "BYS"
    },
    {
        "id_cliente": "5111",
        "nombre": "EL CHAYO"
    },
    {
        "id_cliente": "5112",
        "nombre": "KEVIN"
    },
    {
        "id_cliente": "5122",
        "nombre": "VOLCANES"
    },
    {
        "id_cliente": "5123",
        "nombre": "CASA RAMIREZ"
    },
    {
        "id_cliente": "5124",
        "nombre": "EL RANCHERITO"
    },
    {
        "id_cliente": "5132",
        "nombre": "LIZ"
    },
    {
        "id_cliente": "5134",
        "nombre": "LA TERRAZA EL SAUCE"
    },
    {
        "id_cliente": "5136",
        "nombre": "LONJA MERCANTIL SAN BARTOLO"
    },
    {
        "id_cliente": "5141",
        "nombre": "IBIZA"
    },
    {
        "id_cliente": "5146",
        "nombre": "LA TARAHUMARA"
    },
    {
        "id_cliente": "5152",
        "nombre": "LA VICTORIA"
    },
    {
        "id_cliente": "5153",
        "nombre": "DANIELA"
    },
    {
        "id_cliente": "5155",
        "nombre": "5 ESTRELLAS"
    },
    {
        "id_cliente": "5158",
        "nombre": "NANOS"
    },
    {
        "id_cliente": "5159",
        "nombre": "EL BARRILITO"
    },
    {
        "id_cliente": "5160",
        "nombre": "PALOMA"
    },
    {
        "id_cliente": "5166",
        "nombre": "OSIRIS"
    },
    {
        "id_cliente": "5167",
        "nombre": "LEVIATHAN"
    },
    {
        "id_cliente": "5171",
        "nombre": "CHELA EXPRES SAN FRANCISCO"
    },
    {
        "id_cliente": "5176",
        "nombre": "YAMILET"
    },
    {
        "id_cliente": "5182",
        "nombre": "TIZAYORK"
    },
    {
        "id_cliente": "5185",
        "nombre": "BERNARDINA"
    },
    {
        "id_cliente": "5194",
        "nombre": "SAFARI"
    },
    {
        "id_cliente": "5199",
        "nombre": "EL AMIGUITO"
    },
    {
        "id_cliente": "5200",
        "nombre": "RUBI"
    },
    {
        "id_cliente": "5203",
        "nombre": "EL POTRO"
    },
    {
        "id_cliente": "5206",
        "nombre": "LA POZA II"
    },
    {
        "id_cliente": "5209",
        "nombre": "MARIANA"
    },
    {
        "id_cliente": "5213",
        "nombre": "EL TRIUNFO"
    },
    {
        "id_cliente": "5214",
        "nombre": "EL PARAISO"
    },
    {
        "id_cliente": "5218",
        "nombre": "JARDIN"
    },
    {
        "id_cliente": "5219",
        "nombre": "PLAZA HIDALGO"
    },
    {
        "id_cliente": "5223",
        "nombre": "ALEX"
    },
    {
        "id_cliente": "5224",
        "nombre": "JUEGA EL GALLO"
    },
    {
        "id_cliente": "5226",
        "nombre": "ROSITAS"
    },
    {
        "id_cliente": "5229",
        "nombre": "LA VICTORIA"
    },
    {
        "id_cliente": "5230",
        "nombre": "LA ESQUINA"
    },
    {
        "id_cliente": "5235",
        "nombre": "DEPOSITO BOGUZ"
    },
    {
        "id_cliente": "5236",
        "nombre": "SOFI"
    },
    {
        "id_cliente": "5242",
        "nombre": "DON NETO"
    },
    {
        "id_cliente": "5251",
        "nombre": "ALFREDO"
    },
    {
        "id_cliente": "5252",
        "nombre": "BLANCA"
    },
    {
        "id_cliente": "5256",
        "nombre": "LUNA 3"
    },
    {
        "id_cliente": "5260",
        "nombre": "GRISEL"
    },
    {
        "id_cliente": "5266",
        "nombre": "ZAMA"
    },
    {
        "id_cliente": "5267",
        "nombre": "CHAGO"
    },
    {
        "id_cliente": "5273",
        "nombre": "LAURARA VAQUIO"
    },
    {
        "id_cliente": "5274",
        "nombre": "CANTALAGUA"
    },
    {
        "id_cliente": "5279",
        "nombre": "EL PATITO"
    },
    {
        "id_cliente": "5281",
        "nombre": "JR"
    },
    {
        "id_cliente": "5282",
        "nombre": "KIKIN"
    },
    {
        "id_cliente": "5283",
        "nombre": "ANGELES"
    },
    {
        "id_cliente": "5290",
        "nombre": "ALDAMA"
    },
    {
        "id_cliente": "5297",
        "nombre": "SAN DIEGUITO"
    },
    {
        "id_cliente": "5306",
        "nombre": "EL PESCADOR"
    },
    {
        "id_cliente": "5308",
        "nombre": "MARIFER"
    },
    {
        "id_cliente": "5312",
        "nombre": "GUERRERO"
    },
    {
        "id_cliente": "5316",
        "nombre": "GABY"
    },
    {
        "id_cliente": "5317",
        "nombre": "DIVINO SALVADOR"
    },
    {
        "id_cliente": "5318",
        "nombre": "MINISUPER 7 24"
    },
    {
        "id_cliente": "5320",
        "nombre": "SAN ANTONIO"
    },
    {
        "id_cliente": "5321",
        "nombre": "AME"
    },
    {
        "id_cliente": "5322",
        "nombre": "ALLYSON"
    },
    {
        "id_cliente": "5323",
        "nombre": "MI CHANGARRITO"
    },
    {
        "id_cliente": "5325",
        "nombre": "MINISUPER DARY"
    },
    {
        "id_cliente": "5331",
        "nombre": "ALAN"
    },
    {
        "id_cliente": "5332",
        "nombre": "ARISA"
    },
    {
        "id_cliente": "5334",
        "nombre": "LAS LLAVES"
    },
    {
        "id_cliente": "5341",
        "nombre": "LA VECINA"
    },
    {
        "id_cliente": "5346",
        "nombre": "RONYCHELA"
    },
    {
        "id_cliente": "5347",
        "nombre": "LA NARANJA"
    },
    {
        "id_cliente": "5350",
        "nombre": "KIKKA"
    },
    {
        "id_cliente": "5351",
        "nombre": "MINISUPER SIX"
    },
    {
        "id_cliente": "5353",
        "nombre": "EL TORITO"
    },
    {
        "id_cliente": "5370",
        "nombre": "DORIS"
    },
    {
        "id_cliente": "5372",
        "nombre": "XIMENA"
    },
    {
        "id_cliente": "5373",
        "nombre": "DIANA PAOLA"
    },
    {
        "id_cliente": "5374",
        "nombre": "EL GUSANITO"
    },
    {
        "id_cliente": "5384",
        "nombre": "LA NORIA"
    },
    {
        "id_cliente": "5386",
        "nombre": "ALEX"
    },
    {
        "id_cliente": "5387",
        "nombre": "MIX TIZAYUCA"
    },
    {
        "id_cliente": "5398",
        "nombre": "ALEX"
    },
    {
        "id_cliente": "5403",
        "nombre": "EL TORO"
    },
    {
        "id_cliente": "5411",
        "nombre": "LAS CRUCES"
    },
    {
        "id_cliente": "5416",
        "nombre": "GUADALUPANA"
    },
    {
        "id_cliente": "5418",
        "nombre": "GOMEZ"
    },
    {
        "id_cliente": "5424",
        "nombre": "LA CONCHITA 2"
    },
    {
        "id_cliente": "5425",
        "nombre": "LOS HERMANOS"
    },
    {
        "id_cliente": "5430",
        "nombre": "ARROYO"
    },
    {
        "id_cliente": "5439",
        "nombre": "OSWALDO"
    },
    {
        "id_cliente": "5440",
        "nombre": "LA PEQUENA"
    },
    {
        "id_cliente": "5442",
        "nombre": "MORALES"
    },
    {
        "id_cliente": "5445",
        "nombre": "DANY"
    },
    {
        "id_cliente": "5447",
        "nombre": "MICHEL"
    },
    {
        "id_cliente": "5451",
        "nombre": "LA LAZIO"
    },
    {
        "id_cliente": "5458",
        "nombre": "AMAPOLA"
    },
    {
        "id_cliente": "5463",
        "nombre": "ROCIO"
    },
    {
        "id_cliente": "5465",
        "nombre": "GAYTAN"
    },
    {
        "id_cliente": "5467",
        "nombre": "LA ESPERANZA"
    },
    {
        "id_cliente": "5471",
        "nombre": "VENTANITA BLANCA"
    },
    {
        "id_cliente": "5474",
        "nombre": "MINI"
    },
    {
        "id_cliente": "5476",
        "nombre": "SANTA ROSA"
    },
    {
        "id_cliente": "5484",
        "nombre": "LA NACIONAL"
    },
    {
        "id_cliente": "5486",
        "nombre": "LA CASITA"
    },
    {
        "id_cliente": "5492",
        "nombre": "CIPRESES"
    },
    {
        "id_cliente": "5500",
        "nombre": "VIVE MINISUPER"
    },
    {
        "id_cliente": "5501",
        "nombre": "EL TEKATITO"
    },
    {
        "id_cliente": "5510",
        "nombre": "DON JUAN"
    },
    {
        "id_cliente": "5511",
        "nombre": "EL PORTAL"
    },
    {
        "id_cliente": "5515",
        "nombre": "KARY"
    },
    {
        "id_cliente": "5517",
        "nombre": "LOS 3 CAMPEONES"
    },
    {
        "id_cliente": "5520",
        "nombre": "MARI"
    },
    {
        "id_cliente": "5521",
        "nombre": "ARMANDOS"
    },
    {
        "id_cliente": "5526",
        "nombre": "MINISUPER A"
    },
    {
        "id_cliente": "5528",
        "nombre": "MI ANGEL"
    },
    {
        "id_cliente": "5529",
        "nombre": "RULO"
    },
    {
        "id_cliente": "5531",
        "nombre": "LA CASCADA"
    },
    {
        "id_cliente": "5534",
        "nombre": "RENTERIA"
    },
    {
        "id_cliente": "5539",
        "nombre": "MICKEY"
    },
    {
        "id_cliente": "5545",
        "nombre": "SOFIA"
    },
    {
        "id_cliente": "5549",
        "nombre": "EL SUPERCITO"
    },
    {
        "id_cliente": "5552",
        "nombre": "LA ESTRELLA"
    },
    {
        "id_cliente": "5554",
        "nombre": "EL GRAN IMPERIO"
    },
    {
        "id_cliente": "5555",
        "nombre": "LA INDEPENDENCIA"
    },
    {
        "id_cliente": "5557",
        "nombre": "MARTINEZ HUITZILZINGO"
    },
    {
        "id_cliente": "5560",
        "nombre": "SAN MIGUEL"
    },
    {
        "id_cliente": "5571",
        "nombre": "REYES ELITE"
    },
    {
        "id_cliente": "5572",
        "nombre": "MIX TULYEHUALCO"
    },
    {
        "id_cliente": "5574",
        "nombre": "BOHEMIAS DEPOT"
    },
    {
        "id_cliente": "5575",
        "nombre": "LA MISA"
    },
    {
        "id_cliente": "5577",
        "nombre": "POSADA LA JOYA"
    },
    {
        "id_cliente": "5580",
        "nombre": "EL TLALCOYOTE"
    },
    {
        "id_cliente": "5586",
        "nombre": "PUNTA ESTRELLA"
    },
    {
        "id_cliente": "5587",
        "nombre": "LUNA"
    },
    {
        "id_cliente": "5588",
        "nombre": "ACME"
    },
    {
        "id_cliente": "5591",
        "nombre": "MIS DOS AMIGOS"
    },
    {
        "id_cliente": "5600",
        "nombre": "JAROCHO"
    },
    {
        "id_cliente": "5602",
        "nombre": "MINISUPER V"
    },
    {
        "id_cliente": "5605",
        "nombre": "LA ESQUINA"
    },
    {
        "id_cliente": "5610",
        "nombre": "ISELA"
    },
    {
        "id_cliente": "5612",
        "nombre": "CHE ALITAS"
    },
    {
        "id_cliente": "5616",
        "nombre": "EL ZOTANO"
    },
    {
        "id_cliente": "5619",
        "nombre": "MEDITERRANEO"
    },
    {
        "id_cliente": "5621",
        "nombre": "EL BUEN SAZON"
    },
    {
        "id_cliente": "5623",
        "nombre": "EL DESPACHO"
    },
    {
        "id_cliente": "5631",
        "nombre": "SONORA 51"
    },
    {
        "id_cliente": "5635",
        "nombre": "JULIANA"
    },
    {
        "id_cliente": "5638",
        "nombre": "MARA"
    },
    {
        "id_cliente": "5642",
        "nombre": "VISTA HERMOSA"
    },
    {
        "id_cliente": "5652",
        "nombre": "CAMELIAS"
    },
    {
        "id_cliente": "5653",
        "nombre": "ABEL"
    },
    {
        "id_cliente": "5655",
        "nombre": "ALFARO"
    },
    {
        "id_cliente": "5657",
        "nombre": "LAS DE LA ENTRADA"
    },
    {
        "id_cliente": "5659",
        "nombre": "GABY"
    },
    {
        "id_cliente": "5665",
        "nombre": "LORE"
    },
    {
        "id_cliente": "5667",
        "nombre": "SAMANTHA"
    },
    {
        "id_cliente": "5669",
        "nombre": "CUQUIS SNACKS AND COFFEE BAR"
    },
    {
        "id_cliente": "5670",
        "nombre": "REYES MARTH"
    },
    {
        "id_cliente": "5677",
        "nombre": "LOZADA"
    },
    {
        "id_cliente": "5678",
        "nombre": "PEREA"
    },
    {
        "id_cliente": "5690",
        "nombre": "TORIS"
    },
    {
        "id_cliente": "5692",
        "nombre": "ALEXA"
    },
    {
        "id_cliente": "5694",
        "nombre": "DANNY"
    },
    {
        "id_cliente": "5697",
        "nombre": "CAVA LA DIVINA"
    },
    {
        "id_cliente": "5698",
        "nombre": "LOS HERMANOS"
    },
    {
        "id_cliente": "5701",
        "nombre": "LA LOMITA"
    },
    {
        "id_cliente": "5702",
        "nombre": "LA PLANTACION"
    },
    {
        "id_cliente": "5706",
        "nombre": "YAYITA"
    },
    {
        "id_cliente": "5708",
        "nombre": "EDITH"
    },
    {
        "id_cliente": "5710",
        "nombre": "ESTRELLA"
    },
    {
        "id_cliente": "5711",
        "nombre": "FIDELORAMA"
    },
    {
        "id_cliente": "5713",
        "nombre": "TECATE MIX"
    },
    {
        "id_cliente": "5714",
        "nombre": "VICTORIA"
    },
    {
        "id_cliente": "5719",
        "nombre": "LOS MANANTIALES"
    },
    {
        "id_cliente": "5720",
        "nombre": "SABORES"
    },
    {
        "id_cliente": "5721",
        "nombre": "EL PUENTE"
    },
    {
        "id_cliente": "5722",
        "nombre": "MARY 2"
    },
    {
        "id_cliente": "5725",
        "nombre": "EL TUZITO"
    },
    {
        "id_cliente": "5727",
        "nombre": "LA JUQUILITA CAS"
    },
    {
        "id_cliente": "5731",
        "nombre": "ISABEL"
    },
    {
        "id_cliente": "5732",
        "nombre": "DEPOSITO AMBAR"
    },
    {
        "id_cliente": "5734",
        "nombre": "LA GUADALUPANA"
    },
    {
        "id_cliente": "5735",
        "nombre": "YESENIA"
    },
    {
        "id_cliente": "5736",
        "nombre": "KRATHER  CLUB"
    },
    {
        "id_cliente": "5737",
        "nombre": "LOS ABUELOS"
    },
    {
        "id_cliente": "5805",
        "nombre": "EL SEGUNDO"
    },
    {
        "id_cliente": "6308",
        "nombre": "GENECIS"
    },
    {
        "id_cliente": "6311",
        "nombre": "GUERRERO"
    },
    {
        "id_cliente": "6312",
        "nombre": "JIMENEZ"
    },
    {
        "id_cliente": "6318",
        "nombre": "SAN JOSE DE TECOMITL"
    },
    {
        "id_cliente": "6320",
        "nombre": "ELEGGUA"
    },
    {
        "id_cliente": "6321",
        "nombre": "EL CABALLERO"
    },
    {
        "id_cliente": "6328",
        "nombre": "MIRELES"
    },
    {
        "id_cliente": "6331",
        "nombre": "FILEMON AZPEITIA HERNANDEZ"
    },
    {
        "id_cliente": "6337",
        "nombre": "LA GUERA"
    },
    {
        "id_cliente": "6339",
        "nombre": "LOS GIRASOLES"
    },
    {
        "id_cliente": "6340",
        "nombre": "CHE ALITAS II"
    },
    {
        "id_cliente": "6341",
        "nombre": "TIENDA SAN VICENTE"
    },
    {
        "id_cliente": "6342",
        "nombre": "LAS ALITAS"
    },
    {
        "id_cliente": "6347",
        "nombre": "LA PROVIDENCIA"
    },
    {
        "id_cliente": "6350",
        "nombre": "EL COLMADON"
    },
    {
        "id_cliente": "6355",
        "nombre": "LA CURVA DE TETELCO"
    },
    {
        "id_cliente": "6358",
        "nombre": "ALCATRAZ"
    },
    {
        "id_cliente": "6361",
        "nombre": "LAS ALAS DEL CENTRO"
    },
    {
        "id_cliente": "6363",
        "nombre": "ANDRES PACHECO CERON"
    },
    {
        "id_cliente": "6368",
        "nombre": "RUBENS"
    },
    {
        "id_cliente": "6369",
        "nombre": "ABARROTES MARTE"
    },
    {
        "id_cliente": "6372",
        "nombre": "EL BUEN TRATO"
    },
    {
        "id_cliente": "6373",
        "nombre": "LA ESCONDIDA 2"
    },
    {
        "id_cliente": "6381",
        "nombre": "CARTA BLANCA"
    },
    {
        "id_cliente": "6382",
        "nombre": "ROA"
    },
    {
        "id_cliente": "6437",
        "nombre": "MANI"
    },
    {
        "id_cliente": "6438",
        "nombre": "HERRERA"
    },
    {
        "id_cliente": "6440",
        "nombre": "CASA LAURRABAQUIO"
    },
    {
        "id_cliente": "6441",
        "nombre": "SANTA ANA"
    },
    {
        "id_cliente": "6443",
        "nombre": "ABARROTES DORIS"
    },
    {
        "id_cliente": "6445",
        "nombre": "LA ESMERALDA"
    },
    {
        "id_cliente": "6447",
        "nombre": "LUPITA"
    },
    {
        "id_cliente": "6448",
        "nombre": "LA NUEVA TIENDA"
    },
    {
        "id_cliente": "6450",
        "nombre": "TACHITO"
    },
    {
        "id_cliente": "6451",
        "nombre": "VINOS Y LICORES SIRENA"
    },
    {
        "id_cliente": "6452",
        "nombre": "LA GUADALUPANA"
    },
    {
        "id_cliente": "6453",
        "nombre": "PICHOS"
    },
    {
        "id_cliente": "6454",
        "nombre": "LA CASA BONITA"
    },
    {
        "id_cliente": "6456",
        "nombre": "TLATEC NEPANTLA"
    },
    {
        "id_cliente": "6458",
        "nombre": "ABARROTES MUNOZ"
    },
    {
        "id_cliente": "6460",
        "nombre": "JUQUILITA"
    },
    {
        "id_cliente": "6461",
        "nombre": "CARI"
    },
    {
        "id_cliente": "6464",
        "nombre": "JULIET"
    },
    {
        "id_cliente": "6466",
        "nombre": "LA UVA"
    },
    {
        "id_cliente": "6468",
        "nombre": "LA CREMA Y NATA"
    },
    {
        "id_cliente": "6474",
        "nombre": "ASADOS DON ABEL"
    },
    {
        "id_cliente": "6475",
        "nombre": "LOS ALCATRAZ"
    },
    {
        "id_cliente": "6476",
        "nombre": "SAN JOSE"
    },
    {
        "id_cliente": "6478",
        "nombre": "ABARROTES LA CHIQUITA"
    },
    {
        "id_cliente": "6482",
        "nombre": "THE COFEE STARS"
    },
    {
        "id_cliente": "6486",
        "nombre": "EL BANDITA"
    },
    {
        "id_cliente": "6488",
        "nombre": "SAN BARTOLOME"
    },
    {
        "id_cliente": "6489",
        "nombre": "LA RIVERA"
    },
    {
        "id_cliente": "6492",
        "nombre": "LA GLORIA DE VILLA"
    },
    {
        "id_cliente": "6493",
        "nombre": "TIANQUISTENCO"
    },
    {
        "id_cliente": "7612",
        "nombre": "RINCONCITO DE LOS SABORES"
    },
    {
        "id_cliente": "7615",
        "nombre": "LA LUPITA TETELCO"
    },
    {
        "id_cliente": "7616",
        "nombre": "MARIANITA"
    },
    {
        "id_cliente": "7639",
        "nombre": "LOS ARADOS"
    },
    {
        "id_cliente": "7655",
        "nombre": "LUNA TLALMANALCO"
    },
    {
        "id_cliente": "7667",
        "nombre": "EL CABALLERO II"
    },
    {
        "id_cliente": "7683",
        "nombre": "ABARROTES AZUU"
    },
    {
        "id_cliente": "7685",
        "nombre": "MICHELADAS D POCAS"
    },
    {
        "id_cliente": "7729",
        "nombre": "LAS NIETAS"
    },
    {
        "id_cliente": "7777",
        "nombre": "SAN JUDAS 2"
    },
    {
        "id_cliente": "7788",
        "nombre": "CREMERIA Y ABARROTES LOS SOCIOS"
    },
    {
        "id_cliente": "7801",
        "nombre": "EL CANELO"
    },
    {
        "id_cliente": "7808",
        "nombre": "EL CHINO"
    },
    {
        "id_cliente": "7831",
        "nombre": "LA FAMILIA"
    },
    {
        "id_cliente": "7896",
        "nombre": "MISCELANEA FLORES"
    },
    {
        "id_cliente": "7912",
        "nombre": "MISCELANEA EL AGUACATE"
    },
    {
        "id_cliente": "7917",
        "nombre": "POMPEYO"
    },
    {
        "id_cliente": "7930",
        "nombre": "LA VANISA"
    },
    {
        "id_cliente": "7936",
        "nombre": "LUPITAES 3CHICK"
    },
    {
        "id_cliente": "7937",
        "nombre": "LULU"
    },
    {
        "id_cliente": "7949",
        "nombre": "SAN AGUSTIN"
    },
    {
        "id_cliente": "7959",
        "nombre": "KEVIN"
    },
    {
        "id_cliente": "7960",
        "nombre": "EL MUNDIALITO"
    },
    {
        "id_cliente": "8000",
        "nombre": "AGAVOS"
    },
    {
        "id_cliente": "8007",
        "nombre": "GODIS"
    },
    {
        "id_cliente": "8008",
        "nombre": "DON PONCHO"
    },
    {
        "id_cliente": "8032",
        "nombre": "EL OSO"
    },
    {
        "id_cliente": "8036",
        "nombre": "MISCELANEA  LA VENTANITA"
    },
    {
        "id_cliente": "8044",
        "nombre": "MISCELANEA RANCHO GRANDE"
    },
    {
        "id_cliente": "8050",
        "nombre": "YOLANDA"
    },
    {
        "id_cliente": "8104",
        "nombre": "WILLIAMS"
    },
    {
        "id_cliente": "8127",
        "nombre": "CHELADA"
    },
    {
        "id_cliente": "8128",
        "nombre": "LA SUPREMA"
    },
    {
        "id_cliente": "8130",
        "nombre": "MATERIAS PRIMAS SAN JOSE"
    },
    {
        "id_cliente": "8141",
        "nombre": "DEPOSITO COCO"
    },
    {
        "id_cliente": "8167",
        "nombre": "LOS MORA"
    },
    {
        "id_cliente": "8176",
        "nombre": "DANY"
    },
    {
        "id_cliente": "8181",
        "nombre": "PROGRAMA DE ABASTO"
    },
    {
        "id_cliente": "8201",
        "nombre": "MANDALA"
    },
    {
        "id_cliente": "8210",
        "nombre": "MISCELANEA Y ABARROTES SANCHEZ"
    },
    {
        "id_cliente": "8213",
        "nombre": "MIX TEZOMPA"
    },
    {
        "id_cliente": "8216",
        "nombre": "MINI SUPER 24HR"
    },
    {
        "id_cliente": "8239",
        "nombre": "LA CAVA"
    },
    {
        "id_cliente": "8246",
        "nombre": "MISCELANEA VIRI"
    },
    {
        "id_cliente": "8249",
        "nombre": "ABARROTES ROMERO"
    },
    {
        "id_cliente": "8274",
        "nombre": "HAMILTON"
    },
    {
        "id_cliente": "8275",
        "nombre": "MISCELANEA SAN MIGUEL"
    },
    {
        "id_cliente": "8279",
        "nombre": "MIX AMECA"
    },
    {
        "id_cliente": "8294",
        "nombre": "LA MALTA NEGRA"
    },
    {
        "id_cliente": "8303",
        "nombre": "MIX TEPE"
    },
    {
        "id_cliente": "8312",
        "nombre": "SAN MATEO 2"
    },
    {
        "id_cliente": "8313",
        "nombre": "DEPOSITO YULI"
    },
    {
        "id_cliente": "8314",
        "nombre": "LA BOHEMIA"
    },
    {
        "id_cliente": "8329",
        "nombre": "SAN JUDITAS"
    },
    {
        "id_cliente": "8332",
        "nombre": "LA ESPECIAL"
    },
    {
        "id_cliente": "8334",
        "nombre": "MISCELANEA EVELYN"
    },
    {
        "id_cliente": "8337",
        "nombre": "SING MY WAY KARAOKE"
    },
    {
        "id_cliente": "8338",
        "nombre": "CADENA"
    },
    {
        "id_cliente": "8344",
        "nombre": "INICIO"
    },
    {
        "id_cliente": "8347",
        "nombre": "LA GUADALUPANA"
    },
    {
        "id_cliente": "8348",
        "nombre": "LOS GUEROS"
    },
    {
        "id_cliente": "8354",
        "nombre": "YUREIMY"
    },
    {
        "id_cliente": "8356",
        "nombre": "EL COMPADRE"
    },
    {
        "id_cliente": "8358",
        "nombre": "SOFIA"
    },
    {
        "id_cliente": "8363",
        "nombre": "EL GANZO"
    },
    {
        "id_cliente": "8366",
        "nombre": "LA FARRA"
    },
    {
        "id_cliente": "8368",
        "nombre": "EL BAR KITO DE YEN"
    },
    {
        "id_cliente": "8370",
        "nombre": "SAID"
    },
    {
        "id_cliente": "8375",
        "nombre": "EL PORTON"
    },
    {
        "id_cliente": "8378",
        "nombre": "LA SURTIDORA"
    },
    {
        "id_cliente": "8379",
        "nombre": "DIVINA MISERICORDIA"
    },
    {
        "id_cliente": "8386",
        "nombre": "PAPA LORD"
    },
    {
        "id_cliente": "8387",
        "nombre": "TECO ALITAS"
    },
    {
        "id_cliente": "8394",
        "nombre": "EL LINCE"
    },
    {
        "id_cliente": "8397",
        "nombre": "ROSY"
    },
    {
        "id_cliente": "8398",
        "nombre": "CASA BRAVO"
    },
    {
        "id_cliente": "8411",
        "nombre": "YOZZ"
    },
    {
        "id_cliente": "8412",
        "nombre": "LA CONQUISTA"
    },
    {
        "id_cliente": "8413",
        "nombre": "ABARROTES CORRIL"
    },
    {
        "id_cliente": "8421",
        "nombre": "EL AGUADOR"
    },
    {
        "id_cliente": "8423",
        "nombre": "EL GRILLO"
    },
    {
        "id_cliente": "8424",
        "nombre": "KELLY"
    },
    {
        "id_cliente": "8425",
        "nombre": "LA VAQUITA"
    },
    {
        "id_cliente": "8427",
        "nombre": "LA MONTANA DE NEXAPA"
    },
    {
        "id_cliente": "8438",
        "nombre": "DON LUIS"
    },
    {
        "id_cliente": "8439",
        "nombre": "LAS HORMIGUITAS"
    },
    {
        "id_cliente": "8441",
        "nombre": "LA BOVEDA"
    },
    {
        "id_cliente": "8445",
        "nombre": "SAN LUCAS"
    },
    {
        "id_cliente": "8446",
        "nombre": "FRIDAS"
    },
    {
        "id_cliente": "8451",
        "nombre": "MIX TLALMANALCO"
    },
    {
        "id_cliente": "8456",
        "nombre": "LAURITA"
    },
    {
        "id_cliente": "8457",
        "nombre": "LOS VENADOS"
    },
    {
        "id_cliente": "8458",
        "nombre": "ABARROTES LUVAN"
    },
    {
        "id_cliente": "8459",
        "nombre": "EL OXXITO DE NEPANTLA"
    },
    {
        "id_cliente": "8460",
        "nombre": "EL VIEJO"
    },
    {
        "id_cliente": "8475",
        "nombre": "BAR MI TIERRA"
    },
    {
        "id_cliente": "8487",
        "nombre": "LA REVOLUCION"
    },
    {
        "id_cliente": "8500",
        "nombre": "CHABELITA"
    },
    {
        "id_cliente": "8507",
        "nombre": "AGUILA"
    },
    {
        "id_cliente": "8508",
        "nombre": "EL SARAPE"
    },
    {
        "id_cliente": "8509",
        "nombre": "CHARLY"
    },
    {
        "id_cliente": "8511",
        "nombre": "LA GUADALUPANA DE MIHUACAN"
    },
    {
        "id_cliente": "8512",
        "nombre": "MARIELA"
    },
    {
        "id_cliente": "8514",
        "nombre": "BALTASAR"
    },
    {
        "id_cliente": "8515",
        "nombre": "MAAGI"
    },
    {
        "id_cliente": "8516",
        "nombre": "SOL"
    },
    {
        "id_cliente": "8518",
        "nombre": "LOS PACHANGAS"
    },
    {
        "id_cliente": "8527",
        "nombre": "DULCE NOMBRE DE JESUS"
    },
    {
        "id_cliente": "8531",
        "nombre": "ABARROTES LA ARMADURA"
    },
    {
        "id_cliente": "8536",
        "nombre": "ABARROTES CHARLY"
    },
    {
        "id_cliente": "8540",
        "nombre": "EVELYN"
    },
    {
        "id_cliente": "8541",
        "nombre": "ABARROTES PENA"
    },
    {
        "id_cliente": "8545",
        "nombre": "MI PEQUENO BORREGUIN"
    },
    {
        "id_cliente": "8546",
        "nombre": "ABARROTES SOL"
    },
    {
        "id_cliente": "8547",
        "nombre": "LA GUADALUPANA DE SANTO TOMAS"
    },
    {
        "id_cliente": "8550",
        "nombre": "PUG BARRIL"
    },
    {
        "id_cliente": "8556",
        "nombre": "NOYIS"
    },
    {
        "id_cliente": "8558",
        "nombre": "NECTAR HOME"
    },
    {
        "id_cliente": "8559",
        "nombre": "MARICELA"
    },
    {
        "id_cliente": "8564",
        "nombre": "AMAZING CLUB"
    },
    {
        "id_cliente": "8567",
        "nombre": "JUANIS"
    },
    {
        "id_cliente": "8569",
        "nombre": "ABARROTES FELINOS"
    },
    {
        "id_cliente": "8570",
        "nombre": "MISCELANEA LOS  PEPES"
    },
    {
        "id_cliente": "8572",
        "nombre": "ABARROTES CHAVALIN"
    },
    {
        "id_cliente": "8575",
        "nombre": "EL CALVARIO"
    },
    {
        "id_cliente": "8578",
        "nombre": "LA PALMA"
    },
    {
        "id_cliente": "8579",
        "nombre": "CHARIS"
    },
    {
        "id_cliente": "8580",
        "nombre": "GARITA"
    },
    {
        "id_cliente": "8585",
        "nombre": "MICHELADAS LOS WOODYS"
    },
    {
        "id_cliente": "8586",
        "nombre": "DAVID"
    },
    {
        "id_cliente": "8592",
        "nombre": "EL RINCONCITO DE SNOOPY"
    },
    {
        "id_cliente": "8602",
        "nombre": "VA QUE VA"
    },
    {
        "id_cliente": "8605",
        "nombre": "ABARROTES CUQUITO"
    },
    {
        "id_cliente": "8606",
        "nombre": "LA FIESTITA"
    },
    {
        "id_cliente": "8607",
        "nombre": "MR CHELA"
    },
    {
        "id_cliente": "8608",
        "nombre": "PRADEL"
    },
    {
        "id_cliente": "8609",
        "nombre": "EL TRUEQUE"
    },
    {
        "id_cliente": "8610",
        "nombre": "EL VIKINGO"
    },
    {
        "id_cliente": "8611",
        "nombre": "ABARROTES GAMERS FOOD"
    },
    {
        "id_cliente": "8612",
        "nombre": "ABARROTES ROY"
    },
    {
        "id_cliente": "300609474",
        "nombre": "MARISCOS CIELO MAR Y TIERRA"
    },
    {
        "id_cliente": "600782167",
        "nombre": "TAQUERIA DON BETO"
    },
    {
        "id_cliente": "600783307",
        "nombre": "ABARROTES SHADDAI"
    },
    {
        "id_cliente": "600783339",
        "nombre": "LA VENTANITA "
    },
    {
        "id_cliente": "600956287",
        "nombre": "ABARROTES ANTONIO "
    },
    {
        "id_cliente": "600956310",
        "nombre": "MINI SUPER LA NENA"
    },
    {
        "id_cliente": "600961127",
        "nombre": "ABARROTES TIZAYUCA"
    },
    {
        "id_cliente": "7103001395",
        "nombre": "ABARROTES CAROL"
    },
    {
        "id_cliente": "7103002179",
        "nombre": " EL PROGRESO"
    },
    {
        "id_cliente": "7343001013",
        "nombre": "EL GAVILAN"
    },
    {
        "id_cliente": "7343001025",
        "nombre": "EL TATA"
    },
    {
        "id_cliente": "7343001107",
        "nombre": "MISCELANEA VIKY"
    },
    {
        "id_cliente": "7343001151",
        "nombre": "MISCELANEA LA HIDALGUENSE"
    },
    {
        "id_cliente": "7343001155",
        "nombre": "ABARROTES  IVON"
    },
    {
        "id_cliente": "7343001160",
        "nombre": "PALOMA FELIZ"
    },
    {
        "id_cliente": "7343001175",
        "nombre": "EL MIRADOR"
    },
    {
        "id_cliente": "7423000841",
        "nombre": "EL GALLO"
    },
    {
        "id_cliente": "7432000219",
        "nombre": "LOS GONZOS"
    },
    {
        "id_cliente": "7569000164",
        "nombre": "ABARROTES JULIA"
    },
    {
        "id_cliente": "7793000004",
        "nombre": "MICHELADAS ANY"
    },
    {
        "id_cliente": "7793000057",
        "nombre": "MISCELANEA KM"
    },
    {
        "id_cliente": "7811000563",
        "nombre": "EL BOSQUE DE LA CHINA"
    },
    {
        "id_cliente": "7811000564",
        "nombre": "CASA TAPIA"
    },
    {
        "id_cliente": "7811000565",
        "nombre": "SAN GABRIEL"
    },
    {
        "id_cliente": "7811000604",
        "nombre": "ABARROTES  ANGEL"
    },
    {
        "id_cliente": "7812000621",
        "nombre": "LA TIA MONI"
    },
    {
        "id_cliente": "7817000355",
        "nombre": "ABARROTES TOONS"
    },
    {
        "id_cliente": "7817000357",
        "nombre": "ABARROTES FER"
    },
    {
        "id_cliente": "7817000368",
        "nombre": "MARU Y ALGO MAS"
    },
    {
        "id_cliente": "7835000871",
        "nombre": "ABARROTES NUEVA ILUSION"
    },
    {
        "id_cliente": "7835000872",
        "nombre": "ABARROTES VIKI"
    },
    {
        "id_cliente": "7835000901",
        "nombre": "EL TRIUNFO"
    },
    {
        "id_cliente": "7835000903",
        "nombre": "LA CRUZ "
    },
    {
        "id_cliente": "7835000933",
        "nombre": "AZUL"
    },
    {
        "id_cliente": "7835000936",
        "nombre": "EUS"
    },
    {
        "id_cliente": "7835000944",
        "nombre": "LA NUEVA"
    },
    {
        "id_cliente": "7835000975",
        "nombre": "ROXY"
    },
    {
        "id_cliente": "7835001067",
        "nombre": "MISCELANEA LA CONSENTIDA"
    },
    {
        "id_cliente": "7900000338",
        "nombre": "LETY"
    },
    {
        "id_cliente": "7900000367",
        "nombre": "LA EXCELENCIA"
    },
    {
        "id_cliente": "7900000372",
        "nombre": "ABARROTES FAMIS"
    },
    {
        "id_cliente": "7900000374",
        "nombre": "LOS ABUELOS"
    },
    {
        "id_cliente": "7900000428",
        "nombre": "LA GRAN VICTORIA"
    },
    {
        "id_cliente": "7900000497",
        "nombre": "SUENO MEXICANO"
    },
    {
        "id_cliente": "7907000057",
        "nombre": "ABARROTES SAMI"
    },
    {
        "id_cliente": "7933000086",
        "nombre": "ABARROTES GEMINIS"
    },
    {
        "id_cliente": "7933000112",
        "nombre": "RESTAURANT LA FINCA "
    },
    {
        "id_cliente": "7933000132",
        "nombre": "COCINA ECONOMICA PATY"
    },
    {
        "id_cliente": "7933000215",
        "nombre": "ESME"
    },
    {
        "id_cliente": "9101000150",
        "nombre": "ABARROTES LA GUERRERENSE"
    },
    {
        "id_cliente": "9101000151",
        "nombre": "CAMELIA "
    },
    {
        "id_cliente": "9101000152",
        "nombre": "PUEBLO MAGICO"
    },
    {
        "id_cliente": "9101000153",
        "nombre": "EL PROGRESO"
    },
    {
        "id_cliente": "9101000154",
        "nombre": "LA VALENCIANA"
    },
    {
        "id_cliente": "9101000155",
        "nombre": "MICELANEA 3D"
    },
    {
        "id_cliente": "9101000156",
        "nombre": "ABARROTES FRONTERA"
    },
    {
        "id_cliente": "9101000157",
        "nombre": "VERO"
    },
    {
        "id_cliente": "9102000168",
        "nombre": "CHALCA CHELAS"
    },
    {
        "id_cliente": "9102000169",
        "nombre": "EL QUESO"
    },
    {
        "id_cliente": "9102000170",
        "nombre": "MARTINEZ II"
    },
    {
        "id_cliente": "9102000171",
        "nombre": "ANIME SANTUARY"
    },
    {
        "id_cliente": "9102000172",
        "nombre": "ANGEL"
    },
    {
        "id_cliente": "9102000173",
        "nombre": "EL PATRON"
    },
    {
        "id_cliente": "9102000174",
        "nombre": "MATEO"
    },
    {
        "id_cliente": "9102000175",
        "nombre": "JIMENEZ"
    },
    {
        "id_cliente": "9102000176",
        "nombre": "ABARROTES BUBLES"
    },
    {
        "id_cliente": "9102000177",
        "nombre": "AYUMI"
    },
    {
        "id_cliente": "9103000091",
        "nombre": "ABARROTES FERNANDO II"
    },
    {
        "id_cliente": "9103000092",
        "nombre": "MISCELANEA AVE FENIX"
    },
    {
        "id_cliente": "9103000093",
        "nombre": "VINOS Y LICORES PENA"
    },
    {
        "id_cliente": "9103000094",
        "nombre": "ABARROTES LA NACIONAL"
    },
    {
        "id_cliente": "9103000095",
        "nombre": "ABARROTES  PATY"
    },
    {
        "id_cliente": "9103000096",
        "nombre": "ABARROTES  PEPE"
    },
    {
        "id_cliente": "9103000097",
        "nombre": "ABARROTES  SAN JUDITAS 2"
    },
    {
        "id_cliente": "9103000098",
        "nombre": "EL PUNTO"
    },
    {
        "id_cliente": "9103000099",
        "nombre": "MISCELANEA  EL JAROCHO"
    },
    {
        "id_cliente": "9103000100",
        "nombre": "MISCELANEA ADRIANA"
    },
    {
        "id_cliente": "9103000101",
        "nombre": "MISCELANEA EL COLIBRI"
    },
    {
        "id_cliente": "9103000102",
        "nombre": "ABARROTES  LUZ"
    },
    {
        "id_cliente": "9103000103",
        "nombre": "ABARROTES Y RECAUDERIA MARY"
    },
    {
        "id_cliente": "9103000104",
        "nombre": "BIKERITOS"
    },
    {
        "id_cliente": "9103000105",
        "nombre": "JUQUILITA SAN JOSE"
    },
    {
        "id_cliente": "9121000026",
        "nombre": "MINISUPER LA FE"
    },
    {
        "id_cliente": "9121000027",
        "nombre": "ABARROTES INMACULADA"
    },
    {
        "id_cliente": "9121000028",
        "nombre": "MIXELANEA ORISHAS"
    },
    {
        "id_cliente": "9121000029",
        "nombre": "ABARROTES LA CONSENTIDA"
    },
    {
        "id_cliente": "9121000030",
        "nombre": "EL BUKY 2"
    },
    {
        "id_cliente": "9121000031",
        "nombre": "GAMBOA "
    },
    {
        "id_cliente": "9121000032",
        "nombre": "VALERIA "
    },
    {
        "id_cliente": "9121000033",
        "nombre": "HERMANOS "
    },
    {
        "id_cliente": "9121000034",
        "nombre": "MONTES  PIZZAS "
    },
    {
        "id_cliente": "9121000035",
        "nombre": "GUA"
    },
    {
        "id_cliente": "9121000036",
        "nombre": "LOS PEQUES"
    },
    {
        "id_cliente": "9121000037",
        "nombre": "ROSAS"
    },
    {
        "id_cliente": "9121000038",
        "nombre": "LOS PINOS "
    },
    {
        "id_cliente": "9121000039",
        "nombre": "SAN ISIDRO II"
    },
    {
        "id_cliente": "9121000040",
        "nombre": "FRANCIS"
    },
    {
        "id_cliente": "9121000041",
        "nombre": "MI CAPRICHITO"
    },
    {
        "id_cliente": "9122000021",
        "nombre": "ABARROTES JUVENTUS"
    },
    {
        "id_cliente": "9122000022",
        "nombre": "LA ESCONDIDA"
    },
    {
        "id_cliente": "9122000023",
        "nombre": "ROBLE "
    },
    {
        "id_cliente": "9123000026",
        "nombre": "ABARROTES NACIMIENTO"
    },
    {
        "id_cliente": "9123000027",
        "nombre": "ABARROTES EL OXITO DE MARIA BONITA"
    },
    {
        "id_cliente": "9123000028",
        "nombre": "ABARROTES JND"
    },
    {
        "id_cliente": "9123000029",
        "nombre": "ABARROTES LAS PALMAS"
    },
    {
        "id_cliente": "9123000030",
        "nombre": "ABARROTES LIDU"
    },
    {
        "id_cliente": "9123000031",
        "nombre": "ABARROTES MEDINA"
    },
    {
        "id_cliente": "9123000032",
        "nombre": "TEQUIMILAR RANCHO ESCONDIDO"
    },
    {
        "id_cliente": "9123000033",
        "nombre": "VANY Y NELY"
    },
    {
        "id_cliente": "9123000034",
        "nombre": "EL SEIS"
    },
    {
        "id_cliente": "9123000035",
        "nombre": "ABARROTES EZEQUIEL"
    },
    {
        "id_cliente": "9123000036",
        "nombre": "LA ESCONDIDA"
    },
    {
        "id_cliente": "9123000037",
        "nombre": "ABARROTES BLANCA ESTELA"
    },
    {
        "id_cliente": "9153000001",
        "nombre": "MIX SAN FRANCISCO"
    },
    {
        "id_cliente": "9201000150",
        "nombre": "LOS PRIMOS"
    },
    {
        "id_cliente": "9201000151",
        "nombre": "EL WERO "
    },
    {
        "id_cliente": "9201000152",
        "nombre": "ABARROTES PATY"
    },
    {
        "id_cliente": "9201000153",
        "nombre": "PONCHITOS II"
    },
    {
        "id_cliente": "9201000154",
        "nombre": "SAN JUDITAS"
    },
    {
        "id_cliente": "9201000155",
        "nombre": "LA ESQUINA"
    },
    {
        "id_cliente": "9201000156",
        "nombre": "ABARROTES  LA PAZ"
    },
    {
        "id_cliente": "9201000157",
        "nombre": "ABARROTES ARTURO"
    },
    {
        "id_cliente": "9201000158",
        "nombre": "SAN MARTIN"
    },
    {
        "id_cliente": "9201000159",
        "nombre": "ABARROTES AQUILES"
    },
    {
        "id_cliente": "9202000112",
        "nombre": "EL RECREO"
    },
    {
        "id_cliente": "9202000113",
        "nombre": "EL PAPI"
    },
    {
        "id_cliente": "9202000114",
        "nombre": "LA CABANA DEL ABUELO"
    },
    {
        "id_cliente": "9202000115",
        "nombre": "LAS CASITAS"
    },
    {
        "id_cliente": "9202000116",
        "nombre": "EL CAGUAMON ENMASCARADO"
    },
    {
        "id_cliente": "9202000117",
        "nombre": "LA VIA"
    },
    {
        "id_cliente": "9202000118",
        "nombre": "MISCELANEA MC"
    },
    {
        "id_cliente": "9202000119",
        "nombre": "LA ESTACION DE OZUMBA"
    },
    {
        "id_cliente": "9211000004",
        "nombre": "LA TIENDITA DEL EDEN"
    },
    {
        "id_cliente": "9211000005",
        "nombre": "ABARROTES DON TONO"
    },
    {
        "id_cliente": "9211000006",
        "nombre": "HERMANOS MARTINEZ"
    },
    {
        "id_cliente": "9211000007",
        "nombre": "EL PATRON"
    },
    {
        "id_cliente": "9221000037",
        "nombre": "EL OASIS"
    },
    {
        "id_cliente": "9221000038",
        "nombre": "ROJAS"
    },
    {
        "id_cliente": "9221000039",
        "nombre": "LA FLOR DEL VALLE"
    },
    {
        "id_cliente": "9221000040",
        "nombre": "ELI"
    },
    {
        "id_cliente": "9222000063",
        "nombre": "LUMA"
    },
    {
        "id_cliente": "9222000064",
        "nombre": "BABYS BEER"
    },
    {
        "id_cliente": "9222000065",
        "nombre": "ANELISA"
    },
    {
        "id_cliente": "9222000066",
        "nombre": "MI MAGDIS"
    },
    {
        "id_cliente": "9222000067",
        "nombre": "ATHAN"
    },
    {
        "id_cliente": "9222000068",
        "nombre": "AZTLAN"
    },
    {
        "id_cliente": "9222000069",
        "nombre": "SAN DIEGUITO"
    },
    {
        "id_cliente": "9222000070",
        "nombre": "ARELY"
    },
    {
        "id_cliente": "9222000071",
        "nombre": "LA ESQUINITA"
    },
    {
        "id_cliente": "9222000072",
        "nombre": "LA CABANA"
    },
    {
        "id_cliente": "9222000073",
        "nombre": "EL CHE"
    },
    {
        "id_cliente": "9222000074",
        "nombre": "EL PARAISO"
    },
    {
        "id_cliente": "9222000075",
        "nombre": "SOLUCIONES EN ELECTRONICA "
    },
    {
        "id_cliente": "9222000076",
        "nombre": "LUPITA"
    },
    {
        "id_cliente": "9222000077",
        "nombre": "EL RANCHO"
    },
    {
        "id_cliente": "9301000027",
        "nombre": "LA HERENCIA DE HECTOR"
    },
    {
        "id_cliente": "9301000028",
        "nombre": "MINI SUPER FLORENCIA"
    },
    {
        "id_cliente": "9301000029",
        "nombre": "DEPOSITO MODELO"
    },
    {
        "id_cliente": "9301000030",
        "nombre": "SUPER NINY"
    },
    {
        "id_cliente": "9301000032",
        "nombre": "TIENDA GOGA"
    },
    {
        "id_cliente": "9301000033",
        "nombre": "DEPOSITO TECATITO MIX"
    },
    {
        "id_cliente": "9301000034",
        "nombre": "ROCK Y COFFEE"
    },
    {
        "id_cliente": "9301000035",
        "nombre": "SALON 21"
    },
    {
        "id_cliente": "9301000036",
        "nombre": "ABARROTES VINOS Y LICORES LA JOYA"
    },
    {
        "id_cliente": "9301000037",
        "nombre": "LA INDIA LADINA"
    },
    {
        "id_cliente": "9301000038",
        "nombre": "LA 110 RESTAURANTE"
    },
    {
        "id_cliente": "9301000039",
        "nombre": "BLACK STAR"
    },
    {
        "id_cliente": "9301000040",
        "nombre": "BAMMBATEE"
    },
    {
        "id_cliente": "9303000004",
        "nombre": "LA GUERA "
    },
    {
        "id_cliente": "9303000005",
        "nombre": "LA PALAPA "
    },
    {
        "id_cliente": "9311000005",
        "nombre": "ROAD CARAVELLE"
    },
    {
        "id_cliente": "9311000006",
        "nombre": "PERLA NEGRA"
    },
    {
        "id_cliente": "9311000007",
        "nombre": "MINI SUPER GRECIA"
    },
    {
        "id_cliente": "9311000008",
        "nombre": "ABARROTES SANDY"
    },
    {
        "id_cliente": "9311000009",
        "nombre": "ABARROTES MELANI"
    },
    {
        "id_cliente": "9311000010",
        "nombre": "ABARROTES LA MILAGROSA"
    },
    {
        "id_cliente": "9311000011",
        "nombre": "TACOS LA PASADITA "
    },
    {
        "id_cliente": "9311000012",
        "nombre": "ABARROTES SERGIO"
    },
    {
        "id_cliente": "9311000013",
        "nombre": "CARNITAS ANITA "
    },
    {
        "id_cliente": "9311000014",
        "nombre": "ABARROTES  ANGEL"
    },
    {
        "id_cliente": "9311000015",
        "nombre": "LA HORTENSIA"
    },
    {
        "id_cliente": "9311000016",
        "nombre": "ABARROTES LUPITA"
    },
    {
        "id_cliente": "9311000017",
        "nombre": "MISCELANEA LA FUTBOLERA "
    },
    {
        "id_cliente": "9311000018",
        "nombre": "LOS COMPADRES"
    },
    {
        "id_cliente": "9312000003",
        "nombre": "DEPOSITO DOLORES"
    },
    {
        "id_cliente": "9312000004",
        "nombre": "ABARROTES MARY II"
    },
    {
        "id_cliente": "9312000005",
        "nombre": "DANIEL"
    },
    {
        "id_cliente": "9312000006",
        "nombre": "ABARROTES ABIGAIL"
    },
    {
        "id_cliente": "9312000007",
        "nombre": "MISCELANEA VISTA HERMOSA "
    },
    {
        "id_cliente": "9312000008",
        "nombre": "MISCELANEA LA ESQUINA "
    },
    {
        "id_cliente": "9312000009",
        "nombre": "VINATERIA EL RETIRO"
    },
    {
        "id_cliente": "9312000010",
        "nombre": "EL PASO "
    },
    {
        "id_cliente": "9312000011",
        "nombre": "PORTAL"
    },
    {
        "id_cliente": "9321000026",
        "nombre": "SUPER TAQUERIA"
    },
    {
        "id_cliente": "9321000027",
        "nombre": "EL OASIS"
    },
    {
        "id_cliente": "9321000028",
        "nombre": "DON GEORGE"
    },
    {
        "id_cliente": "9321000029",
        "nombre": "CREMERIA Y ABARROTES ALICE"
    },
    {
        "id_cliente": "9321000030",
        "nombre": "RESTAURANTE FAMILIAR EL LIENZO"
    },
    {
        "id_cliente": "9321000031",
        "nombre": "EL RINCON DEL CENTRO "
    },
    {
        "id_cliente": "9321000032",
        "nombre": "ABARROTES EL BARTO"
    },
    {
        "id_cliente": "9321000033",
        "nombre": "TIENDA Y PAPELERIA CORONA"
    },
    {
        "id_cliente": "9321000034",
        "nombre": "ABARROTES JESSY"
    },
    {
        "id_cliente": "9321000035",
        "nombre": "3 GUSANITOS"
    },
    {
        "id_cliente": "9321000036",
        "nombre": "ABARROTES ALHER"
    },
    {
        "id_cliente": "9321000037",
        "nombre": "MINI SUPER CHARLIE"
    },
    {
        "id_cliente": "9321000038",
        "nombre": "ABARROTES EL OASIS III"
    },
    {
        "id_cliente": "9321000039",
        "nombre": "ABARROTES CHIVIS"
    },
    {
        "id_cliente": "9321000040",
        "nombre": "MINI SUPER EL GLOBO"
    },
    {
        "id_cliente": "9321000041",
        "nombre": "BILLAR HACIENDAS"
    },
    {
        "id_cliente": "9321000042",
        "nombre": "ABARROTES LA HORMIGA"
    },
    {
        "id_cliente": "9321000043",
        "nombre": "DEPOSITO LA CHAPIS"
    },
    {
        "id_cliente": "9321000044",
        "nombre": "IRISH CAFFEE"
    },
    {
        "id_cliente": "9321000045",
        "nombre": "ABARROTES EL LIBRAMIENTO"
    },
    {
        "id_cliente": "9321000046",
        "nombre": "MANGOS BAR"
    },
    {
        "id_cliente": "9321000047",
        "nombre": "EL SOTANO"
    },
    {
        "id_cliente": "9321000048",
        "nombre": "LA KAFETA"
    },
    {
        "id_cliente": "9321000049",
        "nombre": "VINATERIA GARCIA"
    },
    {
        "id_cliente": "9321000050",
        "nombre": "ABARROTES KIKE"
    },
    {
        "id_cliente": "9321000051",
        "nombre": "SHIN GON"
    },
    {
        "id_cliente": "9321000052",
        "nombre": "ABARROTES SOFILU"
    },
    {
        "id_cliente": "9321000053",
        "nombre": "ABARROTES MICKEY "
    },
    {
        "id_cliente": "9321000054",
        "nombre": "HOTEL LOS POTRILLOS"
    },
    {
        "id_cliente": "9321000055",
        "nombre": "MISCELANEA LA LUPITA 2"
    },
    {
        "id_cliente": "9321000056",
        "nombre": "BARBER SHOP ALEX"
    },
    {
        "id_cliente": "9321000057",
        "nombre": "CHE LOKO"
    },
    {
        "id_cliente": "9321000058",
        "nombre": "LA CONDESITA "
    },
    {
        "id_cliente": "9321000059",
        "nombre": "MARISCOS JIMMYS"
    },
    {
        "id_cliente": "9321000060",
        "nombre": "MIXIOTES EL REY"
    },
    {
        "id_cliente": "9321000061",
        "nombre": "LA FLOR DE TECARIO"
    },
    {
        "id_cliente": "9321000062",
        "nombre": "ABARROTES SANTI"
    },
    {
        "id_cliente": "9322000007",
        "nombre": "MISCELANEA LOS PRIMOS"
    },
    {
        "id_cliente": "9322000008",
        "nombre": "VERDULERIA ROMERO "
    },
    {
        "id_cliente": "9322000009",
        "nombre": "MISCELANEA DANNA"
    },
    {
        "id_cliente": "9322000010",
        "nombre": "ABARROTES MOY"
    },
    {
        "id_cliente": "9322000011",
        "nombre": "ABARROTES KIKE "
    },
    {
        "id_cliente": "9322000012",
        "nombre": "DEPOSITO BATMAN Y ROBIN"
    },
    {
        "id_cliente": "9322000013",
        "nombre": "ABARROTES PAO"
    },
    {
        "id_cliente": "9322000014",
        "nombre": "HUARACHES JULIANCITO"
    },
    {
        "id_cliente": "9322000015",
        "nombre": "MARISQUERIA BRISA"
    },
    {
        "id_cliente": "9322000016",
        "nombre": "CENTRO BONTANERO EL CRUCERO DE EL AMOR "
    },
    {
        "id_cliente": "9322000017",
        "nombre": "MISCELANEA LUPITA"
    },
    {
        "id_cliente": "9322000018",
        "nombre": "ABARROTES LOS INFIELES "
    },
    {
        "id_cliente": "9322000019",
        "nombre": "ABARROTES KIKISH"
    },
    {
        "id_cliente": "9322000020",
        "nombre": "MISCELANEA LA PENA"
    },
    {
        "id_cliente": "9322000021",
        "nombre": "CASA MOY "
    },
    {
        "id_cliente": "9322000022",
        "nombre": "EL GHETTO BIKER CLUB GARAGE"
    },
    {
        "id_cliente": "9322000023",
        "nombre": "TIENDA 4 HERMANAS"
    },
    {
        "id_cliente": "9322000024",
        "nombre": "LA COMERCIAL"
    },
    {
        "id_cliente": "9332000001",
        "nombre": "ABARROTES MALIZ"
    }
]

';

$products_local = '
[
    {
        "id_producto": "107",
        "nombre": "SABORES PARIS PARIS DE NOCHE COLA 2 L",
        "Precio": "312.83"
    },
    {
        "id_producto": "108",
        "nombre": "SABORES PARIS KOSAKO MORA AZUL 2 L",
        "Precio": "312.83"
    },
    {
        "id_producto": "131",
        "nombre": "SABORES PARIS PARIS DE NOCHE ARANDANO 340",
        "Precio": "112.24"
    },
    {
        "id_producto": "272",
        "nombre": "TECATE  4X6 LAT 16OZ",
        "Precio": "343.1"
    },
    {
        "id_producto": "274",
        "nombre": "INDIO 12/1 1X12 BOT 1.18L",
        "Precio": "321.55"
    },
    {
        "id_producto": "276",
        "nombre": "TECATE 12/1 LT1/4 1.18L",
        "Precio": "321.55"
    },
    {
        "id_producto": "278",
        "nombre": "XX LAGER  1X12 BOT 1.18L",
        "Precio": "343.1"
    },
    {
        "id_producto": "280",
        "nombre": "XX LAGER  1X20 BOT 190ML",
        "Precio": "125"
    },
    {
        "id_producto": "282",
        "nombre": "INDIO SAC 4X6 LAT 16OZ",
        "Precio": "343.1"
    },
    {
        "id_producto": "284",
        "nombre": "XX LAGER  1X20 BOT 325ML",
        "Precio": "193.1"
    },
    {
        "id_producto": "286",
        "nombre": "HEINEKEN  4X6 BOT 355ML",
        "Precio": "359.48"
    },
    {
        "id_producto": "288",
        "nombre": "INDIO 20/4 190ML",
        "Precio": "116.38"
    },
    {
        "id_producto": "290",
        "nombre": "INDIO PREMIER 1X20 BOT 325ML",
        "Precio": "168.1"
    },
    {
        "id_producto": "292",
        "nombre": "BOHEMIA OBSCURA OBSCURA 4X6 BOT 355ML",
        "Precio": "335.34"
    },
    {
        "id_producto": "294",
        "nombre": "TECATE TITANIUM SAC 4X6 LAT 355ML",
        "Precio": "278.4482"
    },
    {
        "id_producto": "298",
        "nombre": "XX LAGER NR 4X6 BOT 355ML",
        "Precio": "308.62"
    },
    {
        "id_producto": "302",
        "nombre": "HEINEKEN  4X6 LAT 355ML",
        "Precio": "337.9310"
    },
    {
        "id_producto": "304",
        "nombre": "SOL CERO  4X6 LAT 355ML",
        "Precio": "270.69"
    },
    {
        "id_producto": "306",
        "nombre": "SOL NI 1X20 BOT 190ML",
        "Precio": "116.38"
    },
    {
        "id_producto": "310",
        "nombre": "CARTA BLANCA NI 1X12 BOT 940ML",
        "Precio": "243.97"
    },
    {
        "id_producto": "312",
        "nombre": "INDIO BEAUTY 4X6 BOT 355ML",
        "Precio": "275.86"
    },
    {
        "id_producto": "316",
        "nombre": "XX LAGER  4X6 LAT 355ML",
        "Precio": "287.0689"
    },
    {
        "id_producto": "320",
        "nombre": "BOHEMIA OBSCURA OBSCURA 1X12 BOT 355ML",
        "Precio": "131.03"
    },
    {
        "id_producto": "322",
        "nombre": "SOL NI 1X12 BOT 1.18L",
        "Precio": "321.55"
    },
    {
        "id_producto": "324",
        "nombre": "TECATE LIGHT  4X6 LAT 16OZ",
        "Precio": "343.1"
    },
    {
        "id_producto": "328",
        "nombre": "XX AMBAR PREMIER 4X6 BOT 355ML",
        "Precio": "308.62"
    },
    {
        "id_producto": "330",
        "nombre": "SUPERIOR TW 4X6 BOT 355ML",
        "Precio": "235.34"
    },
    {
        "id_producto": "334",
        "nombre": "HEINEKEN  1X1 BRR 20L",
        "Precio": "689.66"
    },
    {
        "id_producto": "336",
        "nombre": "INDIO  1X1 BRR",
        "Precio": "715.52"
    },
    {
        "id_producto": "338",
        "nombre": "TECATE B1/4 30LT",
        "Precio": "715.52"
    },
    {
        "id_producto": "344",
        "nombre": "BOHEMIA CLASICA 4X6 BOT 355ML",
        "Precio": "335.34"
    },
    {
        "id_producto": "350",
        "nombre": "INDIO BEAUTY 1X12 BOT 355ML",
        "Precio": "150"
    },
    {
        "id_producto": "354",
        "nombre": "SOL NI 4X6 BOT 355ML",
        "Precio": "275.86"
    },
    {
        "id_producto": "360",
        "nombre": "XX LAGER NR 12/2 355ML",
        "Precio": "165.52"
    },
    {
        "id_producto": "370",
        "nombre": "TECATE STD 20/2 325ML",
        "Precio": "168.1"
    },
    {
        "id_producto": "372",
        "nombre": "TECATE LIGHT STD 20/2 325ML",
        "Precio": "168.1"
    },
    {
        "id_producto": "376",
        "nombre": "XX AMBAR PREMIER 1X20 BOT 325ML",
        "Precio": "193.1"
    },
    {
        "id_producto": "378",
        "nombre": "BOHEMIA CLASICA 12/2 355ML",
        "Precio": "125.43"
    },
    {
        "id_producto": "380",
        "nombre": "SOL NI 1X20 BOT 355ML",
        "Precio": "168.1"
    },
    {
        "id_producto": "382",
        "nombre": "INDIO  1X12 BOT 940ML",
        "Precio": "257.76"
    },
    {
        "id_producto": "384",
        "nombre": "SOL NI 1X12 BOT 940ML",
        "Precio": "257.76"
    },
    {
        "id_producto": "396",
        "nombre": "TECATE 12/L 355ML",
        "Precio": "150"
    },
    {
        "id_producto": "398",
        "nombre": "TECATE  4X6 LAT 355ML",
        "Precio": "281.03"
    },
    {
        "id_producto": "400",
        "nombre": "TECATE LIGHT  1X12 LAT 355ML",
        "Precio": "150"
    },
    {
        "id_producto": "402",
        "nombre": "TECATE LIGHT TC 4X6 LAT 355ML",
        "Precio": "281.03"
    },
    {
        "id_producto": "410",
        "nombre": "ENVASE GENERICO CM",
        "Precio": "72.41"
    },
    {
        "id_producto": "418",
        "nombre": "PARIS KOSAKO MULTISABOR 16 OZ NO RETORNABLE",
        "Precio": "112.24"
    },
    {
        "id_producto": "423",
        "nombre": "ENVASE BARRIL RETORNABLE",
        "Precio": "1206.9"
    },
    {
        "id_producto": "493",
        "nombre": "NOCHE BUENA NR 1X12 BOT 12OZ",
        "Precio": "170.69"
    },
    {
        "id_producto": "502",
        "nombre": "STRONGBOW GOLD 1X24 BOT 330ML",
        "Precio": "374.14"
    },
    {
        "id_producto": "503",
        "nombre": "STRONGBOW GOLD RED BERRIES 1X24 BOT 330M",
        "Precio": "374.14"
    },
    {
        "id_producto": "513",
        "nombre": "PARIS GATILLERO COLA 340 ML NO RETORNABLE\r\n",
        "Precio": "112.24"
    },
    {
        "id_producto": "521",
        "nombre": "TECATE LIGHT 12/1 1X12 BOT 1.18L\r\n",
        "Precio": "321.55"
    },
    {
        "id_producto": "522",
        "nombre": "CAJA DE VASO GENÉRICO INDIO TECATE O SOL 20 X 25 44 OZ",
        "Precio": "646.55"
    },
    {
        "id_producto": "531",
        "nombre": "XX AMBAR  1X1 BRR 20L",
        "Precio": "549.14"
    },
    {
        "id_producto": "532",
        "nombre": "XX LAGER  1X1 BRR 20L",
        "Precio": "549.14"
    },
    {
        "id_producto": "533",
        "nombre": "TECATE 1X1 BRR 20L",
        "Precio": "491.38"
    },
    {
        "id_producto": "534",
        "nombre": "INDIO 1X1 BRR 20L",
        "Precio": "491.38"
    },
    {
        "id_producto": "539",
        "nombre": "TARRO DE MEDIA SUBLIMADO",
        "Precio": "344.83"
    },
    {
        "id_producto": "555",
        "nombre": "TECATE TITANIUM 4X6 LAT 16 OZ",
        "Precio": "359.48"
    },
    {
        "id_producto": "558",
        "nombre": "HEINEKEN 4X6 LAT 16 OZ\r\n",
        "Precio": "401.72"
    },
    {
        "id_producto": "559",
        "nombre": "BOXITO DE CHOCOLATE 4X6 240ML",
        "Precio": "210"
    },
    {
        "id_producto": "560",
        "nombre": "PARIS FILÓSOFO 340 ML NR 12 NO RETORNABLE\r\n",
        "Precio": "112.24"
    },
    {
        "id_producto": "561",
        "nombre": "PARIS DIAMANTE NEGRO 340 ML NR 12 NO RETORNABLE\r\n",
        "Precio": "112.24"
    },
    {
        "id_producto": "562",
        "nombre": "PARIS MONJITA 340 ML NR 12 NO RETORNABLE\r\n",
        "Precio": "112.24"
    },
    {
        "id_producto": "563",
        "nombre": "PARIS PARIS DE NOCHE 600 ML NR 12 NO RETORNABLE\r\n",
        "Precio": "152.07"
    },
    {
        "id_producto": "564",
        "nombre": "PARIS KOSAKO 600 ML NR 12 NO RETORNABLE\r\n",
        "Precio": "152.07"
    },
    {
        "id_producto": "565",
        "nombre": "PARIS KOSAKO 3 L NR NO RETORNABLE\r\n",
        "Precio": "312.83"
    },
    {
        "id_producto": "567",
        "nombre": "PARIS BUFFALO 340 ML NR 12 NO RETORNABLE\r\n",
        "Precio": "86.21"
    },
    {
        "id_producto": "568",
        "nombre": "PARIS BINGO 473 ML NR 12 NO RETORNABLE\r\n",
        "Precio": "108.62"
    },
    {
        "id_producto": "569",
        "nombre": "PARIS SENSUAL 340 ML NR 12 NO RETORNABLE\r\n",
        "Precio": "193.97"
    },
    {
        "id_producto": "573",
        "nombre": "XX LAGER 4X6 LAT 16 OZ",
        "Precio": "380.17"
    },
    {
        "id_producto": "574",
        "nombre": "SOL CLAMATO 4X6 LAT 16 OZ\r\n",
        "Precio": "373.28"
    },
    {
        "id_producto": "576",
        "nombre": "TARRO DE LITRO SUBLIMADO",
        "Precio": "474.14"
    },
    {
        "id_producto": "591",
        "nombre": "XX AMBAR 1X12 BOT 1.18L\r\n",
        "Precio": "343.1"
    },
    {
        "id_producto": "592",
        "nombre": "XX AMBAR 4X6 LAT 16 OZ",
        "Precio": "380.17"
    },
    {
        "id_producto": "599",
        "nombre": "SOL MICHELADA 4X6 LAT 16 OZ\r\n",
        "Precio": "373.28"
    },
    {
        "id_producto": "606",
        "nombre": "AGUA NATURAL BRILLANTE 300ML",
        "Precio": "26.66"
    },
    {
        "id_producto": "607",
        "nombre": "AGUA NATURAL BRILLANTE 600ML",
        "Precio": "65.04"
    },
    {
        "id_producto": "608",
        "nombre": "AGUA NATURAL BRILLANTE 1L",
        "Precio": "55.94"
    },
    {
        "id_producto": "609",
        "nombre": "AGUA NATURAL BRILLANTE 1.5L",
        "Precio": "57.71"
    },
    {
        "id_producto": "610",
        "nombre": "AGUA MINERAL LATA 355ML",
        "Precio": "143.67"
    },
    {
        "id_producto": "611",
        "nombre": "AGUA MINERAL BOTELLA 355ML",
        "Precio": "95.99"
    },
    {
        "id_producto": "612",
        "nombre": "AGUA MINERAL BOTELLA 600ML",
        "Precio": "116.81"
    },
    {
        "id_producto": "613",
        "nombre": "AGUA MINERAL BOTELLA 2L",
        "Precio": "87.57"
    },
    {
        "id_producto": "614",
        "nombre": "BRILLANTE FRESA 3L",
        "Precio": "104.71"
    },
    {
        "id_producto": "615",
        "nombre": "BRILLANTE MANDARINA 3L",
        "Precio": "104.71"
    },
    {
        "id_producto": "616",
        "nombre": "BRILLANTE MANZANA 3L",
        "Precio": "104.71"
    },
    {
        "id_producto": "617",
        "nombre": "BRILLANTE PIÃA 3L",
        "Precio": "104.71"
    },
    {
        "id_producto": "618",
        "nombre": "BRILLANTE SANGRIA 3L",
        "Precio": "104.71"
    },
    {
        "id_producto": "619",
        "nombre": "BRILLANTE TORONJA 3L",
        "Precio": "104.71"
    },
    {
        "id_producto": "620",
        "nombre": "BRILLANTE SURTIDO 6 SAB 3L",
        "Precio": "104.71"
    },
    {
        "id_producto": "621",
        "nombre": "BRILLANTE FRESA 2L",
        "Precio": "94.62"
    },
    {
        "id_producto": "622",
        "nombre": "BRILLANTE MANDARINA 2L",
        "Precio": "94.62"
    },
    {
        "id_producto": "623",
        "nombre": "BRILLANTE MANZANA 2L",
        "Precio": "94.62"
    },
    {
        "id_producto": "624",
        "nombre": "BRILLANTE SANGRIA 2L",
        "Precio": "94.62"
    },
    {
        "id_producto": "625",
        "nombre": "BRILLANTE TORONJA 2L",
        "Precio": "94.62"
    },
    {
        "id_producto": "626",
        "nombre": "BRILLANTE SURTIDO 5 SAB 2L",
        "Precio": "94.62"
    },
    {
        "id_producto": "627",
        "nombre": "BRILLANTE FRESA 600ML",
        "Precio": "138.28"
    },
    {
        "id_producto": "628",
        "nombre": "BRILLANTE MANDARINA 600ML",
        "Precio": "138.28"
    },
    {
        "id_producto": "629",
        "nombre": "BRILLANTE MANZANA 600ML",
        "Precio": "138.28"
    },
    {
        "id_producto": "630",
        "nombre": "BRILLANTE PIÃA 600ML",
        "Precio": "138.28"
    },
    {
        "id_producto": "631",
        "nombre": "BRILLANTE SANGRIA 600ML",
        "Precio": "138.28"
    },
    {
        "id_producto": "632",
        "nombre": "BRILLANTE TORONJA 600ML",
        "Precio": "138.28"
    },
    {
        "id_producto": "633",
        "nombre": "BRILLANTE SURTIDO 6 SAB 600ML",
        "Precio": "138.28"
    },
    {
        "id_producto": "634",
        "nombre": "BRILLANTE FRESA 500ML",
        "Precio": "127.14"
    },
    {
        "id_producto": "635",
        "nombre": "BRILLANTE MANDARINA 500ML",
        "Precio": "127.14"
    },
    {
        "id_producto": "636",
        "nombre": "BRILLANTE MANZANA 500ML",
        "Precio": "127.14"
    },
    {
        "id_producto": "637",
        "nombre": "BRILLANTE PIÃA 500ML",
        "Precio": "127.14"
    },
    {
        "id_producto": "638",
        "nombre": "BRILLANTE SANGRIA 500ML",
        "Precio": "127.14"
    },
    {
        "id_producto": "639",
        "nombre": "BRILLANTE TORONJA 500ML",
        "Precio": "127.14"
    },
    {
        "id_producto": "640",
        "nombre": "BRILLANTE SURTIDO 6 SAB 500ML",
        "Precio": "127.14"
    },
    {
        "id_producto": "641",
        "nombre": "BRILLANTE FRESA 600ML 12 PIEZAS",
        "Precio": "69.14"
    },
    {
        "id_producto": "642",
        "nombre": "BRILLANTE MANDARINA 600ML 12 PIEZAS",
        "Precio": "69.14"
    },
    {
        "id_producto": "643",
        "nombre": "BRILLANTE MANZANA 600ML 12 PIEZAS",
        "Precio": "69.14"
    },
    {
        "id_producto": "644",
        "nombre": "BRILLANTE PINA 600ML 12 PIEZAS",
        "Precio": "69.14"
    },
    {
        "id_producto": "645",
        "nombre": "BRILLANTE SANGRIA 600ML 12 PIEZAS",
        "Precio": "69.14"
    },
    {
        "id_producto": "646",
        "nombre": "BRILLANTE TORONJA 600ML 12 PIEZAS",
        "Precio": "69.14"
    },
    {
        "id_producto": "647",
        "nombre": "AGUA MINERAL BRILLANTE 600ML 12 PIEZAS",
        "Precio": "69.14"
    },
    {
        "id_producto": "648",
        "nombre": "BRILLANTE SURTIDO 3 SAB 600ML PINA/MAND/MZANA",
        "Precio": "69.14"
    },
    {
        "id_producto": "649",
        "nombre": "BRILLANTE SURTIDO 3 SAB 600ML TOR/SANG/FRESA",
        "Precio": "69.14"
    },
    {
        "id_producto": "650",
        "nombre": "BRILLANTE NARANJADA 600ML 12 PIEZAS",
        "Precio": "77.66"
    },
    {
        "id_producto": "651",
        "nombre": "BRILLANTE LIMONADA 600ML 12 PIEZAS",
        "Precio": "77.66"
    },
    {
        "id_producto": "652",
        "nombre": "BRILLANTE PONCHE 600ML 12 PIEZAS",
        "Precio": "77.66"
    },
    {
        "id_producto": "653",
        "nombre": "BRILLANTE NARANJADA 2L",
        "Precio": "106.07"
    },
    {
        "id_producto": "654",
        "nombre": "BRILLANTELIMONADA 2L",
        "Precio": "106.07"
    },
    {
        "id_producto": "655",
        "nombre": "BRILLANTE PONCHE 2L",
        "Precio": "106.07"
    },
    {
        "id_producto": "656",
        "nombre": "BRILLANTE FRESA 355ML",
        "Precio": "110.11"
    },
    {
        "id_producto": "657",
        "nombre": "BRILLANTE MANDARINA 355ML",
        "Precio": "110.11"
    },
    {
        "id_producto": "658",
        "nombre": "BRILLANTE MANZANA 355ML",
        "Precio": "110.11"
    },
    {
        "id_producto": "659",
        "nombre": "BRILLANTE PINA 355ML",
        "Precio": "110.11"
    },
    {
        "id_producto": "660",
        "nombre": "BRILLANTE SANGRIA 355ML",
        "Precio": "110.11"
    },
    {
        "id_producto": "661",
        "nombre": "BRILLANTE TORONJA 355ML",
        "Precio": "110.11"
    },
    {
        "id_producto": "662",
        "nombre": "BRILLANTE SURTIDO 6 SAB 355ML",
        "Precio": "110.11"
    },
    {
        "id_producto": "663",
        "nombre": "CILINDRO CO2 LLENO\r\n",
        "Precio": "1842.86"
    },
    {
        "id_producto": "666",
        "nombre": "HEINEKEN 1X12 LAT BOT 1L\r\n",
        "Precio": "345.69"
    },
    {
        "id_producto": "670",
        "nombre": "GAS CO2",
        "Precio": "232.76"
    },
    {
        "id_producto": "671",
        "nombre": "CILINDRO C02",
        "Precio": "1640.36"
    },
    {
        "id_producto": "680",
        "nombre": "DISPENSADOR TRITON 3L",
        "Precio": "2025.86"
    },
    {
        "id_producto": "681",
        "nombre": "DISPENSADOR TRITÓN 5L",
        "Precio": "2155.17"
    },
    {
        "id_producto": "688",
        "nombre": "SOL CHELADA 4X6 LAT 16OZ",
        "Precio": "373.28"
    },
    {
        "id_producto": "689",
        "nombre": "CARTA BLANCA CAGUAMITA 4X6 355ML",
        "Precio": "173.28"
    },
    {
        "id_producto": "690",
        "nombre": "TECATE 1X12 940ML",
        "Precio": "257.76"
    },
    {
        "id_producto": "691",
        "nombre": "TECATE LIGHT 1X12 940ML",
        "Precio": "257.76"
    },
    {
        "id_producto": "692",
        "nombre": "HEINEKEN 0.0 4X6 LAT 355ML",
        "Precio": "306.9"
    },
    {
        "id_producto": "693",
        "nombre": "HEINEKEN 0.0 4X6 BOT 250ML",
        "Precio": "260.34"
    },
    {
        "id_producto": "694",
        "nombre": "TECATE AMBAR 4X6 LAT 16OZ",
        "Precio": "343.1"
    },
    {
        "id_producto": "695",
        "nombre": "TECATE AMBAR 20/2 325ML",
        "Precio": "168.1"
    },
    {
        "id_producto": "696",
        "nombre": "TECATE AMBAR 1X12 BOT 940ML",
        "Precio": "257.76"
    },
    {
        "id_producto": "697",
        "nombre": "STRONGBOW HONEY & APPLE 1X24 BOT 330ML",
        "Precio": "374.14"
    },
    {
        "id_producto": "698",
        "nombre": "STRONGBOW ROSE 1X24 BOT 330ML",
        "Precio": "374.14"
    },
    {
        "id_producto": "699",
        "nombre": "AMSTEL ULTRA 4X6 LAT 355ML",
        "Precio": "308.62"
    },
    {
        "id_producto": "700",
        "nombre": "AMSTEL ULTRA 4X6 BOT 355ML",
        "Precio": "308.62"
    },
    {
        "id_producto": "95",
        "nombre": "SABORES PARIS PARIS DE NOCHE COLA 340",
        "Precio": "112.24"
    },
    {
        "id_producto": "97",
        "nombre": "SABORES PARIS KOSAKO MORA AZUL 340",
        "Precio": "112.24"
    },
    {
        "id_producto": "99",
        "nombre": "SABORES PARIS MOJITO MENTA 340",
        "Precio": "112.24"
    }
]
';