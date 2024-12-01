<?php
// Define the game world with 20 locations
$world = [
    1 => [
        "description" => "You are in a sunny clearing surrounded by tall grass. To the east, there's a dense forest.",
        "directions" => ["north" => 9, "south" => 2],
        "actions" => [],
        "image" => "images/1-clearing.jpg"  // path to background image
    ],
    2 => [
        "description" => "You enter the forest. The light dims, and you feel the presence of something ancient. A path leads north to an abandoned cabin.",
        "directions" => [ "north" => 1, "south" => 3,"west" => 4],
        "actions" => ["search" => "You find a strange symbol carved on a tree."],
        "image" => "images/2-forest.jpg"  // path to background image
    ],
    3 => [
        "description" => "An old wooden cabin stands here. The door is locked, but there’s a faint light inside.",
        "directions" => ["north" => 2],
        "actions" => [
            "enter" => function() {
                return isset($_SESSION['inventory']['key']) ? 
                    "You unlock the door and enter the cabin, finding dusty furniture and a strange artifact on a table." : 
                    "The door is locked. You need a key to enter.";
            }
        ],
        "image" => "images/3-cabin.jpg"  // path to background image
    ],
    4 => [
        "description" => "A misty swamp lies here. The air is thick and humid, and the ground squelches underfoot. To the west, a ruined tower looms.",
        "directions" => [ "east" => 2, "west" => 5, ],
        "actions" => [],
        "image" => "images/4-misty-swamp.jpg"  // path to background image
    ],
    5 => [
        "description" => "You are on a winding forest path. To the north, there's a sunny clearing. To the east, a stone house stands with a locked door.",
        "directions" => [ "north" =>7, "south" => 6],
        "actions" => [],
        "image" => "images/5-path-clearing.jpg"  // path to background image
    ],
    6 => [
        "description" => "The ruins of an old watchtower stand here. You can hear echoes from the past. A ladder leads up, but it’s broken.",
        "directions" => ["north" => 5, "east" => 4],
        "actions" => ["search" => "You find a rusty key lying in the debris."],
        "give_item" => ["search" => "key"],
        "image" => "images/6-tower.jpg"  // path to background image
    ],
    7 => [
        "description" => "A stone house with sturdy walls and a locked door stands here. There’s no way in without a key.",
        "directions" => ["east" => 8, "south" => 5],
        "actions" => [
            "enter" => function() {
                return isset($_SESSION['inventory']['key']) ? 
                    "You unlock the door and step into a library filled with ancient books." : 
                    "The door is locked. You need a key to enter.";
            }
        ],
        "image" => "images/7-stone-house.jpg"  // path to background image
    ],
    8 => [
        "description" => "You find yourself on a quiet meadow. There’s a pond with clear water. To the east, you see a barn.",
        "directions" => ["north" => 17, "east" => 9, "west" => 7],
        "actions" => ["rest" => "You sit by the pond and feel a sense of peace."],
        "image" => "images/8-pond.jpg"  // path to background image
    ],
    9 => [
        "description" => "A large red barn stands here. The door creaks open. Inside, it smells of hay and old wood.",
        "directions" => ["east" => 10, "south" => 1, "west" => 8],
        "actions" => ["search" => "You find a sturdy rope that might be useful."],
        "give_item" => ["search" => "rope"],
        "image" => "images/9-red-barn.jpg"  // path to background image
    ],
    10 => [
        "description" => "You walk along the edge of a steep cliff. The view is breathtaking...",
        "directions" => ["east" => 11, "west" => 9],
        "actions" => [],
        "image" => "images/10-cliff.jpg"  // path to background image
    ],
    11 => [
        "description" => "An overgrown garden with strange plants surrounds you. A greenhouse lies to the north, barely visible under vines.",
        "directions" => ["north" => 12, "west" => 10],
        "actions" => ["search" => "You find a rare flower that glows faintly."],
        "give_item" => ["search" => "glowing flower"],
        "image" => "images/11-path-to-greenhouse.jpg"  // path to background image
    ],
    12 => [
        "description" => "The greenhouse is filled with exotic plants, some of which are nearly luminescent. To the north you see a garden.",
        "directions" => ["south" => 11, "north" => 13],
        "actions" => ["search" => "You find a small vial of mysterious liquid."],
        "give_item" => ["search" => "mysterious vial"],
        "image" => "images/12-greenhouse.jpg"  // path to background image
    ],
    13 => [
        "description" => "You are on a narrow, winding path. The sound of distant waves can be heard.",
        "directions" => ["south" => 12, "west" => 14],
        "actions" => [],
        "image" => "images/13-winding-path.jpg"  // path to background image
    ],
    14 => [
        "description" => "A small beach is here, with gentle waves lapping against the shore. A boat lies abandoned nearby.",
        "directions" => ["north" => 19, "east" => 13, "west" => 15],
        "actions" => ["search" => "You find an oar beside the boat."],
        "give_item" => ["search" => "oar"],
        "image" => "images/14-beach.jpg"  // path to background image
    ],
    15 => [
        "description" => "You travel along a coastal path, a thick forest blocks the path to the north. You see a beach to the east.",
        "directions" => ["east" => 14, "west" => 16],
        "actions" => [],
        "image" => "images/15-coastal.jpg"  // path to background image
    ],
    16 => [
        "description" => "An old well stands here, with ivy growing up its stone sides. To the west is the forest.",
        "directions" => ["east" => 15, "south" => 17, "west" => 18],
        "actions" => ["search" => "You find a rope ladder tied beside the well."],
        "give_item" => ["search" => "rope ladder"],
        "image" => "images/16-well.jpg"  // path to background image
    ],
    17 => [
        "description" => "You reach a stone circle, its ancient stones covered in moss. A small chest is hidden in the shadows.",
        "directions" => ["north" => 16, "south" => 8],
        "actions" => ["open chest" => "Inside the chest, you find a shiny gem."],
        "give_item" => ["open chest" => "shiny gem"],
        "image" => "images/17-stone-circle.jpg"  // path to background image
    ],
    18 => [
        "description" => "You stand at the edge of a dark cave entrance, shrouded in mystery. A faint sound echoes from within.",
        "directions" => [ "east" => 16],
        "actions" => [
            "enter" => function() {
                return isset($_SESSION['inventory']['shiny gem']) ? 
                    "The shiny gem from your inventory illuminates the cave, it's breathtaking but there is nothing further to be found." : 
                    "You peer inside but it is too dark to see anything.";
            }
        ],
        "image" => "images/18-cave-entrance.jpg"  // path to background image
    ],
    19 => [
        "description" => "The cave opens into a chamber with sunlight streaming from above. A hidden passage leads north.",
        "directions" => ["north" => 20, "south" => 14],
        "actions" => [],
        "image" => "images/19-cave-exit.jpg"  // path to background image
    ],
    20 => [
        "description" => "You find yourself at your home! Congratulations, you've completed your adventure and made it back safely!",
        "directions" => [],
        "actions" => [],
        "image" => "images/cottage.jpg"  // path to background image
    ]
];
