<?php
//задача 1

$a=-1;
if ($a<=1 & $a>=-2) {
    echo "<br>";
    echo "true";
}
//задача 2

$a2=4;
if ($a2<=-2 || $a2>=1) {
    echo "<br>";
    echo "true";
}
//задача 3

$a3=3;
if ($a3<=-2 || $a3>1 & $a3<=3) {
    echo "<br>";
    echo "true";
}
//задача 4
$x4 = 1;
$y4 = 0.5*$x4+1;
if ($x4 >= 0 || $x4 <=0){
    echo "true";
    echo "<br>";
}


//массив интернет магазина
$shop = [
    "categories"=> [
        "computers_and_laptops"=> [
            "computers"=> [
                "acer"=> [
                    "model1"=> [
                        "product"=>"ACER ASPIRE C27-865 AIO (DQ.BCPME.00H)",
                        "availability"=>"нет в наличие",
                        "price"=> "2500 р.",
                        "quantity"=> "0"
                    ],
                    "model2"=> [
                        "product"=>"HP 22-DF0030UR (3A572EA)",
                        "availability"=>"есть в наличие",
                        "price"=> "2000 р.",
                        "quantity"=> "5"
                    ],
                    "model3"=> [
                        "product"=>"HP 24-F0107UR (5KQ80EA)",
                        "availability"=>"есть в наличие",
                        "price"=> "3000 р.",
                        "quantity"=> "3"
                    ],
                ],
                "hp"=> [
                    "model1"=> [
                        "product"=>"HP PAVILION 27 3M601EA",
                        "availability"=>"есть в наличие",
                        "price"=> "3500 р.",
                        "quantity"=> "5"
                    ],
                    "model2"=> [
                        "product"=>"HP 22-DF0030UR (3A572EA)",
                        "availability"=>"нет в наличие",
                        "price"=> "2500 р.",
                        "quantity"=> "0"
                    ],
                    "model3"=> [
                        "product"=>"HP 24-F0107UR (5KQ80EA)",
                        "availability"=>"есть в наличие",
                        "price"=> "2700 р.",
                        "quantity"=> "2"
                    ],
                ]
            ],
            "laptops"=> [
                "acer"=> [
                    "model1"=> [
                        "product"=>"ACER ASPIRE 3 A315-23-A7C9 (NX.HVTEU.005)",
                        "availability"=>"нет в наличие",
                        "price"=> "2500 р.",
                        "quantity"=> "0"
                    ],
                    "model2"=> [
                        "product"=>"ACER NITRO 5 AN515-44-R9QT (NH.Q9GEU.00Z)",
                        "availability"=>"есть в наличие",
                        "price"=> "3500 р.",
                        "quantity"=> "4"
                    ],
                    "model3"=> [
                        "product"=>"ACER NITRO 5 AN515-44-R0DJ (NH.Q9GEU.00D)",
                        "availability"=>"есть в наличие",
                        "price"=> "4000 р.",
                        "quantity"=> "2"
                    ],
                ],
                "apple"=> [
                    "model1"=> [
                        "product"=>"APPLE MACBOOK AIR 13 2020 (MWTL2RU/A)",
                        "availability"=>"нет в наличие",
                        "price"=> "5000 р.",
                        "quantity"=> "0"
                    ],
                    "model2"=> [
                        "product"=>"APPLE MACBOOK AIR 13 2020 (MWTJ2RU/A)",
                        "availability"=>"есть в наличие",
                        "price"=> "5500 р.",
                        "quantity"=> "1"
                    ],
                    "model3"=> [
                        "product"=>"APPLE MACBOOK PRO 13 TOUCH BAR 2020 (MXK32UA/A)",
                        "availability"=>"нет в наличие",
                        "price"=> "7500 р.",
                        "quantity"=> "0"
                    ],
                ],
            ],
            "accessories"=> [
                "mouse"=> [
                    "a4tech"=> [
                        "model1"=> [
                            "product"=>"A4TECH BLOODY Q80",
                            "availability"=>"есть в наличие",
                            "price"=> "100 р.",
                            "quantity"=> "5"
                        ],
                        "model2"=> [
                            "product"=>"A4TECH BLOODY J90",
                            "availability"=>"есть в наличие",
                            "price"=> "110 р.",
                            "quantity"=> "4"
                        ],
                        "model3"=> [
                            "product"=>"A4TECH BLOODY P91S",
                            "availability"=>"есть в наличие",
                            "price"=> "120 р.",
                            "quantity"=> "3"
                        ]
                    ],
                    "canyon"=> [
                        "model1"=> [
                            "product"=>"CANYON CNE-CMS01B",
                            "availability"=>"есть в наличие",
                            "price"=> "90 р.",
                            "quantity"=> "4"
                        ],
                        "model2"=> [
                            "product"=>"CANYON CNE-CMSW05B",
                            "availability"=>"есть в наличие",
                            "price"=> "70 р.",
                            "quantity"=> "5"
                        ],
                        "model3"=> [
                            "product"=>"CANYON CNS-CMSW01P",
                            "availability"=>"есть в наличие",
                            "price"=> "100 р.",
                            "quantity"=> "6"
                        ]
                    ],
                    "haper"=> [
                        "model1"=> [
                            "product"=>"HARPER GM-P05",
                            "availability"=>"есть в наличие",
                            "price"=> "80 р.",
                            "quantity"=> "4"
                        ],
                        "model2"=> [
                            "product"=>"HARPER GM-B10",
                            "availability"=>"есть в наличие",
                            "price"=> "90 р.",
                            "quantity"=> "3"
                        ],
                        "model3"=> [
                            "product"=>"HARPER GM-A05",
                            "availability"=>"есть в наличие",
                            "price"=> "100 р.",
                            "quantity"=> "5"
                        ]
                    ],
                ],
                "keyboards"=> [
                    "a4tech"=> [
                        "model1"=> [
                            "product"=>"A4TECH BLOODY B314",
                            "availability"=>"есть в наличие",
                            "price"=> "100 р.",
                            "quantity"=> "4"
                        ],
                        "model2"=> [
                            "product"=>"A4TECH Q135",
                            "availability"=>"есть в наличие",
                            "price"=> "80 р.",
                            "quantity"=> "4"
                        ],
                        "model3"=> [
                            "product"=>"A4TECH BLOODY B125",
                            "availability"=>"есть в наличие",
                            "price"=> "90 р.",
                            "quantity"=> "5"
                        ]
                    ],
                    "hyper"=> [
                        "model1"=> [
                            "product"=>"HARPER GKB-P101",
                            "availability"=>"есть в наличие",
                            "price"=> "150 р.",
                            "quantity"=> "3"
                        ],
                        "model2"=> [
                            "product"=>"HARPER GKB-15",
                            "availability"=>"есть в наличие",
                            "price"=> "130 р.",
                            "quantity"=> "5"
                        ],
                        "model3"=> [
                            "product"=>"HARPER KBT-570",
                            "availability"=>"есть в наличие",
                            "price"=> "110 р.",
                            "quantity"=> "3"
                        ]
                    ],
                    "hyperx"=> [
                        "model1"=> [
                            "product"=>"HYPERX ALLOY ORIGINS",
                            "availability"=>"есть в наличие",
                            "price"=> "170 р.",
                            "quantity"=> "2"
                        ],
                        "model2"=> [
                            "product"=>"HYPERX ALLOY CORE RGB",
                            "availability"=>"есть в наличие",
                            "price"=> "180 р.",
                            "quantity"=> "4"
                        ],
                        "model3"=> [
                            "product"=>"HYPERX HX-KB7RDX-RU",
                            "availability"=>"есть в наличие",
                            "price"=> "175 р.",
                            "quantity"=> "6"
                        ]
                    ]
                ],
                "hdd"=> [
                    "a-data"=> [
                        "model1"=> [
                            "product"=>"A-DATA HV320 AHV320-2TU31-CBK 2TB",
                            "availability"=>"есть в наличие",
                            "price"=> "200 р.",
                            "quantity"=> "5"
                        ],
                        "model2"=> [
                            "product"=>"A-DATA AHD330-1TU31-CRD",
                            "availability"=>"есть в наличие",
                            "price"=> "170 р.",
                            "quantity"=> "3"
                        ],
                        "model3"=> [
                            "product"=>"A-DATA AHV320-1TU31-CBK",
                            "availability"=>"есть в наличие",
                            "price"=> "150 р.",
                            "quantity"=> "4"
                        ]
                    ],
                    "apacer"=> [
                        "model1"=> [
                            "product"=>"APACER AC233 1TB (AP1TBAC233B-S)",
                            "availability"=>"есть в наличие",
                            "price"=> "150 р.",
                            "quantity"=> "2"
                        ],
                        "model2"=> [
                            "product"=>"APACER AC630 1TB",
                            "availability"=>"есть в наличие",
                            "price"=> "170 р.",
                            "quantity"=> "1"
                        ],
                        "model3"=> [
                            "product"=>"APACER AC731 1TB AP1TBAC731B-1",
                            "availability"=>"есть в наличие",
                            "price"=> "160 р.",
                            "quantity"=> "2"
                        ]
                    ],
                ],
            ],
        ],
        "smartphones"=> [
            "samsung"=> [
                "model1"=> [
                    "product"=>"SAMSUNG GALAXY A51 4GB/64GB",
                    "availability"=>"есть в наличие",
                    "price"=> "1500 р.",
                    "quantity"=> "1"
                ],
                "model2"=> [
                    "product"=>"SAMSUNG GALAXY A11 2GB/32GB",
                    "availability"=>"есть в наличие",
                    "price"=> "650 р.",
                    "quantity"=> "3"
                ],
                "model3"=> [
                    "product"=>"SAMSUNG GALAXY S20 FE SM-G780F/DSM",
                    "availability"=>"есть в наличие",
                    "price"=> "1350 р.",
                    "quantity"=> "2"
                ]
            ],
            "apple"=> [
                "model1"=> [
                    "product"=>"APPLE IPHONE 11 64GB",
                    "availability"=>"есть в наличие",
                    "price"=> "2000 р.",
                    "quantity"=> "1"
                ],
                "model2"=> [
                    "product"=>"APPLE IPHONE SE 64GB",
                    "availability"=>"есть в наличие",
                    "price"=> "2100 р.",
                    "quantity"=> "2"
                ],
                "model3"=> [
                    "product"=>"APPLE IPHONE 11 PRO 64GB",
                    "availability"=>"есть в наличие",
                    "price"=> "2300 р.",
                    "quantity"=> "0"
                ]
            ]
        ],
        "tv"=> [
            "samsung"=> [
                "model1"=> [
                    "product"=>"SAMSUNG UE50TU8000UXRU",
                    "availability"=>"нет в наличие",
                    "price"=> "4500 р.",
                    "quantity"=> "0"
                ],
                "model2"=> [
                    "product"=>"SAMSUNG UE24N4500AUXRU",
                    "availability"=>"нет в наличие",
                    "price"=> "3000 р.",
                    "quantity"=> "0"
                ],
                "model3"=> [
                    "product"=>"SAMSUNG UE50NU7002UXRU",
                    "availability"=>"есть в наличие",
                    "price"=> "2500 р.",
                    "quantity"=> "1"
                ]
            ],
            "lg"=> [
                "model1"=> [
                    "product"=>"LG 32LM570BPLA",
                    "availability"=>"есть в наличие",
                    "price"=> "1950 р.",
                    "quantity"=> "2"
                ],
                "model2"=> [
                    "product"=>"LG 43UM7020PLF",
                    "availability"=>"есть в наличие",
                    "price"=> "2350 р.",
                    "quantity"=> "1"
                ],
                "model3"=> [
                    "product"=>"LG 55UN74006LA",
                    "availability"=>"есть в наличие",
                    "price"=> "3300 р.",
                    "quantity"=> "1"
                ]
            ]
        ]
    ]
];
$pcpt=$shop["categories"]["computers_and_laptops"]["computers"]["acer"]["model1"]["product"];
$pcav=$shop["categories"]["computers_and_laptops"]["computers"]["acer"]["model1"]["availability"];
$pcpr=$shop["categories"]["computers_and_laptops"]["computers"]["acer"]["model1"]["price"];
$pcqt=$shop["categories"]["computers_and_laptops"]["computers"]["acer"]["model1"]["quantity"];
$cat=$shop["categories"];
echo $pcpt;
echo "<br>";
echo $pcav;
echo "<br>";
echo $pcpr;
echo "<br>";
echo $pcqt;
echo "<br>";
echo $cat;
$a=$shop["categories"]["computers_and_laptops"]["computers"]["acer"]["model2"]["quantity"];
if ($a>0)
    echo "<br>";
echo $a;