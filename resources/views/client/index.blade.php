@extends('client.layouts.master')


@section('client_content')
    <div style="width:100%; height:90vh;" id="tree"/>

    <script>
        //JavaScript
        FamilyTree.templates.tommy_male.plus =
            '<circle cx="0" cy="0" r="15" fill="#ffffff" stroke="#aeaeae" stroke-width="1"></circle>'
            + '<line x1="-11" y1="0" x2="11" y2="0" stroke-width="1" stroke="#aeaeae"></line>'
            + '<line x1="0" y1="-11" x2="0" y2="11" stroke-width="1" stroke="#aeaeae"></line>';
        FamilyTree.templates.tommy_male.minus =
            '<circle cx="0" cy="0" r="15" fill="#ffffff" stroke="#aeaeae" stroke-width="1"></circle>'
            + '<line x1="-11" y1="0" x2="11" y2="0" stroke-width="1" stroke="#aeaeae"></line>';
        FamilyTree.templates.tommy_female.plus =
            '<circle cx="0" cy="0" r="15" fill="#ffffff" stroke="#aeaeae" stroke-width="1"></circle>'
            + '<line x1="-11" y1="0" x2="11" y2="0" stroke-width="1" stroke="#aeaeae"></line>'
            + '<line x1="0" y1="-11" x2="0" y2="11" stroke-width="1" stroke="#aeaeae"></line>';
        FamilyTree.templates.tommy_female.minus =
            '<circle cx="0" cy="0" r="15" fill="#ffffff" stroke="#aeaeae" stroke-width="1"></circle>'
            + '<line x1="-11" y1="0" x2="11" y2="0" stroke-width="1" stroke="#aeaeae"></line>';

        FamilyTree.templates.tommy_female.defs = '<g transform="matrix(0.05,0,0,0.05,-12,-9)" id="heart"><path fill="#F57C00" d="M438.482,58.61c-24.7-26.549-59.311-41.655-95.573-41.711c-36.291,0.042-70.938,15.14-95.676,41.694l-8.431,8.909  l-8.431-8.909C181.284,5.762,98.663,2.728,45.832,51.815c-2.341,2.176-4.602,4.436-6.778,6.778 c-52.072,56.166-52.072,142.968,0,199.134l187.358,197.581c6.482,6.843,17.284,7.136,24.127,0.654 c0.224-0.212,0.442-0.43,0.654-0.654l187.29-197.581C490.551,201.567,490.551,114.77,438.482,58.61z"/><g>';
        FamilyTree.templates.tommy_male.defs = '<g transform="matrix(0.05,0,0,0.05,-12,-9)" id="heart"><path fill="#F57C00" d="M438.482,58.61c-24.7-26.549-59.311-41.655-95.573-41.711c-36.291,0.042-70.938,15.14-95.676,41.694l-8.431,8.909  l-8.431-8.909C181.284,5.762,98.663,2.728,45.832,51.815c-2.341,2.176-4.602,4.436-6.778,6.778 c-52.072,56.166-52.072,142.968,0,199.134l187.358,197.581c6.482,6.843,17.284,7.136,24.127,0.654 c0.224-0.212,0.442-0.43,0.654-0.654l187.29-197.581C490.551,201.567,490.551,114.77,438.482,58.61z"/><g>';



        var family = new FamilyTree(document.getElementById("tree"), {

            nodeBinding: {
                field_0: "relationship",
                field_1: "name",
                field_2: "bdate",
                field_3: "id",
                img_0: "img",
            },


            nodes: [
                { id: 1, pids: [2], orderId: 1, relationship: "Great Great mainfather", name: "Jessie England", img: "https://cdn.balkan.app/shared/m60/1.jpg", bdate: 1800, ddate: 1900 },
                { id: 2, pids: [1], orderId: 2, relationship: "Great Great mainmother", name: "Quinn West", img: "https://cdn.balkan.app/shared/w60/1.jpg", bdate: 1800, ddate: 1900 },
                { id: 3, mid: 1, fid: 2, pids: [6], orderId: 4, relationship: "Great mainfather", name: "Ryan Walmsley", img: "https://cdn.balkan.app/shared/m60/2.jpg", bdate: 1830, ddate: 1930 },

                { id: 4, pids: [5], relationship: "Great Great mainfather", name: "Ray Crook", img: "https://cdn.balkan.app/shared/m60/3.jpg", bdate: 1800, ddate: 1900 },
                { id: 5, pids: [4], relationship: "Great Great mainmother", name: "Shiloh Armstrong", img: "https://cdn.balkan.app/shared/w60/2.jpg", bdate: 1800, ddate: 1900 },
                { id: 6, mid: 4, fid: 5, pids: [3], orderId: 3, relationship: "Great mainmother", name: "Vita Hare", img: "https://cdn.balkan.app/shared/w60/3.jpg", bdate: 1830, ddate: 1930 },

                { id: 7, mid: 3, fid: 6, pids: [14], relationship: "P.mainfather", gender: "male", name: "Ruby Walker", img: "https://cdn.balkan.app/shared/m60/4.jpg", bdate: 1950 },

                { id: 8, pids: [9], relationship: "Great Great mainfather", name: "Courtney Riley", img: "https://cdn.balkan.app/shared/m60/4.jpg", bdate: 1800, ddate: 1900 },
                { id: 9, pids: [8], relationship: "Great Great mainmother", name: "Indiana Collett", img: "https://cdn.balkan.app/shared/w60/5.jpg", bdate: 1800, ddate: 1900 },
                { id: 10, mid: 8, fid: 9, pids: [13], relationship: "Great mainfather", name: "Gill Lyons", img: "https://cdn.balkan.app/shared/m60/5.jpg", bdate: 1830, ddate: 1930 },

                { id: 11, pids: [12], relationship: "Great Great mainfather", name: "Lacey Beck", img: "https://cdn.balkan.app/shared/m60/6.jpg", bdate: 1800, ddate: 1900 },
                { id: 12, pids: [11], relationship: "Great Great mainmother", name: "Erin Ridley", img: "https://cdn.balkan.app/shared/w60/6.jpg", bdate: 1800, ddate: 1900 },
                { id: 13, mid: 11, fid: 12, pids: [10], relationship: "Great mainmother", name: "Emory Wilkins", img: "https://cdn.balkan.app/shared/w60/7.jpg", bdate: 1830, ddate: 1930 },

                { id: 14, mid: 10, fid: 13, pids: [7], relationship: "P.mainmother", gender: "female", name: "Felix Stanley", img: "https://cdn.balkan.app/shared/w60/8.jpg" },

                { id: 15, mid: 14, fid: 7, pids: [1015, 1016], relationship: "Dad", gender: "male", name: "Ronnie Sheldon", img: "https://cdn.balkan.app/shared/m60/7.jpg" },


                { id: 101, pids: [102], relationship: "Great Great mainfather", name: "Embry Cheetham", img: "https://cdn.balkan.app/shared/m60/1.jpg", bdate: 1800, ddate: 1900 },
                { id: 102, pids: [101], relationship: "Great Great mainmother", name: "Perry Hilton", img: "https://cdn.balkan.app/shared/w60/9.jpg", bdate: 1800, ddate: 1900 },
                { id: 103, mid: 101, fid: 102, pids: [106], relationship: "Great mainfather", name: "Ollie Bull", img: "https://cdn.balkan.app/shared/m60/7.jpg", bdate: 1830, ddate: 1930 },

                { id: 104, pids: [105], relationship: "Great Great mainfather", name: "Linsay Pye", img: "https://cdn.balkan.app/shared/m60/1.jpg", bdate: 1800, ddate: 1900 },
                { id: 105, pids: [104], relationship: "Great Great mainmother", name: "Flynn Temple", img: "https://cdn.balkan.app/shared/w60/8.jpg", bdate: 1800, ddate: 1900 },
                { id: 106, mid: 104, fid: 105, pids: [103], relationship: "Great mainmother", name: "Perry Reese", img: "https://cdn.balkan.app/shared/w60/1.jpg", bdate: 1830, ddate: 1930 },

                { id: 107, mid: 103, fid: 106, pids: [1014], relationship: "P.mainfather", gender: "male", name: "Abby Alford", img: "https://cdn.balkan.app/shared/m60/3.jpg" },

                { id: 108, pids: [109], relationship: "Great Great mainfather", gender: "male", name: "Sheikh Preston", img: "https://cdn.balkan.app/shared/m60/4.jpg", bdate: 1800, ddate: 1900 },
                { id: 109, pids: [108], relationship: "Great Great mainmother", gender: "female", name: "Amara Frey", img: "https://cdn.balkan.app/shared/w60/3.jpg", bdate: 1800, ddate: 1900 },
                { id: 1010, mid: 108, fid: 109, pids: [1013], relationship: "Great mainmother", gender: "female", name: "Caden Mullen", img: "https://cdn.balkan.app/shared/w60/7.jpg", bdate: 1830, ddate: 1930 },

                { id: 1011, pids: [1012], relationship: "Great Great mainfather", gender: "male", name: "Rosemarie Nelson", img: "https://cdn.balkan.app/shared/m60/2.jpg", bdate: 1800, ddate: 1900 },
                { id: 1012, pids: [1011], relationship: "Great Great mainmother", gender: "female", name: "Addison Wyatt", img: "https://cdn.balkan.app/shared/w60/5.jpg", bdate: 1800, ddate: 1900 },
                { id: 1013, mid: 1011, fid: 1012, pids: [1010], relationship: "Great mainfather", gender: "male", name: "Kendal Waters", img: "https://cdn.balkan.app/shared/m60/1.jpg", bdate: 1830, ddate: 1930 },

                { id: 1014, mid: 1010, fid: 1013, pids: [107], relationship: "P.mainmother", gender: "female", name: "Zion Pacheco", img: "https://cdn.balkan.app/shared/w60/2.jpg" },

                { id: 1015, mid: 1014, fid: 107, pids: [15], relationship: "Mom", gender: "female", name: "Haiden Fountain", img: "https://cdn.balkan.app/shared/w60/9.jpg" },

                { id: 2001, mid: 1015, fid: 15, pids: [2007], relationship: "Sister", gender: "female", name: "Shelley Moody", img: "https://cdn.balkan.app/shared/w60/4.jpg" },
                { id: 2007, pids: [2001], tags: ["left-partner"], relationship: "Spouse", gender: "male", name: "Bobby Carrillo", img: "https://cdn.balkan.app/shared/m60/1.jpg" },
                { id: 3001, fid: 2007, mid: 2001, tags: ["single_male"], relationship: "Child", gender: "male", name: "Rogan Norris", img: "https://cdn.balkan.app/shared/m60/2.jpg" },
                { id: 2002, mid: 1015, fid: 15, pids: [2005, 2006], relationship: "Myself", gender: "male", name: "Joni Emerson", img: "https://cdn.balkan.app/shared/m60/3.jpg" },
                { id: 2005, pids: [2002], fid: 1500, mid: 1501, relationship: "Wife2", gender: "female", name: "Remi Prince", img: "https://cdn.balkan.app/shared/w30/12.jpg" },
                { id: 3002, fid: 2002, mid: 2005, tags: ["family_single_male"], relationship: "Child", gender: "male", name: "Storm Dougherty", img: "https://cdn.balkan.app/shared/m10/1.jpg" },
                { id: 2006, pids: [2002], fid: 1502, mid: 1503, relationship: "First Wife", gender: "female", name: "Brittany Nicholls", img: "https://cdn.balkan.app/shared/w30/13.jpg" },
                { id: 3003, fid: 2002, mid: 2006, pids: [3007], tags: ["main_female_child"], relationship: "Child 1", gender: "female", name: "Cody Costa", img: "https://cdn.balkan.app/shared/w10/2.jpg" },
                { id: 3007, pids: [3003], tags: ["left-partner"], relationship: "Spouse", gender: "male", name: "Jude Bostock", img: "https://cdn.balkan.app/shared/w30/14.jpg" },
                { id: 4001, fid: 3007, mid: 3003, tags: ["family_single_female"], relationship: "mainchild", gender: "female", name: "Jamie-Leigh Mcmahon", img: "https://cdn.balkan.app/shared/w10/3.jpg" },

                { id: 3004, fid: 2002, mid: 2006, pids: [3008], tags: ["main_male_child"], relationship: "Child 2", gender: "male", name: "Deniz Ferry", img: "https://cdn.balkan.app/shared/m10/2.jpg" },
                { id: 3008, pids: [3004], relationship: "Spouse", gender: "female", name: "Hareem Hyde", img: "https://cdn.balkan.app/shared/w30/15.jpg" },
                { id: 4002, fid: 3004, mid: 3008, tags: ["family_single_female"], relationship: "mainchild", gender: "female", name: "Jaylen Olson", img: "https://cdn.balkan.app/shared/w10/4.jpg" },
                { id: 4003, fid: 3004, mid: 3008, tags: ["family_single_male"], relationship: "mainchild", gender: "male", name: "Emaan Green", img: "https://cdn.balkan.app/shared/m10/3.jpg" },


                { id: 3005, fid: 2002, mid: 2006, tags: ["family_single_female"], relationship: "Child 3", gender: "female", name: "Sana Cervantes", img: "https://cdn.balkan.app/shared/2.jpg" },

                { id: 2003, mid: 1015, fid: 15, pids: [2008], relationship: "Brother", gender: "male", name: "Blessing Whitaker", img: "https://cdn.balkan.app/shared/9.jpg" },
                { id: 2008, pids: [2003], relationship: "wife", gender: "female", name: "Eli Pearce", img: "https://cdn.balkan.app/shared/2.jpg" },

                { id: 1500, pids: [1501], relationship: "Father in Law", gender: "male", name: "Lennie Allan", img: "https://cdn.balkan.app/shared/9.jpg" },
                { id: 1501, pids: [1500], relationship: "Mother in Law", gender: "female", name: "Kacie Easton", img: "https://cdn.balkan.app/shared/2.jpg" },
                { id: 1502, pids: [1503], relationship: "Father in Law", gender: "male", name: "Verity Acevedo", img: "https://cdn.balkan.app/shared/9.jpg" },
                { id: 1503, pids: [1502], relationship: "Mother in Law", gender: "female", name: "Sol Rankin", img: "https://cdn.balkan.app/shared/2.jpg" },
            ]
        });


        family.on('expcollclick', function (sender, isCollapsing, nodeId) {
            var node = family.getNode(nodeId);
            if (isCollapsing){
                family.expandCollapse(nodeId, [], node.ftChildrenIds)
            }
            else{
                family.expandCollapse(nodeId, node.ftChildrenIds, [])
            }
            return false;
        });

        family.on('render-link', function(sender, args){
            if (args.cnode.ppid != undefined)
                args.html += '<use data-ctrl-ec-id="' + args.node.id + '" xlink:href="#heart" x="' + (args.p.xb) + '" y="' + (args.p.ya ) +'"/>';
            if (args.cnode.isPartner && args.node.partnerSeparation == 30)
                args.html += '<use data-ctrl-ec-id="' + args.node.id + '" xlink:href="#heart" x="' + (args.p.xb) + '" y="' + (args.p.yb) +'"/>';

        });

    </script>
@endsection
