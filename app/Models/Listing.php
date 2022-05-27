<?php

namespace App\Models;

class Listing {

    public static function all()
    {
        return            [ [
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                              molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                              numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                              optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                              obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                              nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                              tenetur error, harum nesciunt ipsum debitis quas aliquid.'
         ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                              molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                              numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                              optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                              obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                              nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                              tenetur error, harum nesciunt ipsum debitis quas aliquid.'
            ] ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing)
        {
            if($listing['id'] == $id)
            {
                return $listing;
            }
        }

    }


}
