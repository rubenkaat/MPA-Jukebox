<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //genre: black metal
        DB::table('songs')->insert([ 'name' => 'Waters of Ain', 'artist' => 'Watain', 'duration' => '871', 'genre_id' => '1']);
        DB::table('songs')->insert([ 'name' => 'Fair Lucifer, Sad Relic', 'artist' => 'Spectral Wound', 'duration' => '309', 'genre_id' => '1']);
        DB::table('songs')->insert([ 'name' => 'Woods From Which The Spirits Once So Loudly Howled', 'artist' => 'Spectral Wound', 'duration' => '361', 'genre_id' => '1']);
        DB::table('songs')->insert([ 'name' => 'Ontzieling', 'artist' => 'Wiegedood', 'duration' => '452', 'genre_id' => '1']);
        DB::table('songs')->insert([ 'name' => 'Cataract', 'artist' => 'Wiegedood', 'duration' => '670', 'genre_id' => '1']);
        
        //genre: death metal
        DB::table('songs')->insert([ 'name' => 'Bring Back The Plague', 'artist' => 'Cattle Decapitation', 'duration' => '268', 'genre_id' => '2']);
        DB::table('songs')->insert([ 'name' => 'Slaves Beyond Death', 'artist' => 'Thy Art Is Murder', 'duration' => '224', 'genre_id' => '2']);
        DB::table('songs')->insert([ 'name' => 'Misanthrope', 'artist' => 'Death', 'duration' => '363', 'genre_id' => '2']);
        DB::table('songs')->insert([ 'name' => 'Zombie Ritual', 'artist' => 'Death', 'duration' => '273', 'genre_id' => '2']);
        DB::table('songs')->insert([ 'name' => 'Spirit Crusher', 'artist' => 'Death', 'duration' => '407', 'genre_id' => '2']);

        //genre: deathcore
        DB::table('songs')->insert([ 'name' => 'Sun//Eater', 'artist' => 'Lorna Shore', 'duration' => '370', 'genre_id' => '3']);
        DB::table('songs')->insert([ 'name' => 'Blasphemian', 'artist' => 'Infant Annihilator', 'duration' => '444', 'genre_id' => '3']);
        DB::table('songs')->insert([ 'name' => 'Demon King', 'artist' => 'Brand Of Sacrifice', 'duration' => '237', 'genre_id' => '3']);
        DB::table('songs')->insert([ 'name' => 'Blood In The Sands Of Time', 'artist' => 'Shadow Of Intent', 'duration' => '322', 'genre_id' => '3']);
        DB::table('songs')->insert([ 'name' => 'Malediction', 'artist' => 'Shadow Of Intent', 'duration' => '340', 'genre_id' => '3']);

        //genre: Country
        DB::table('songs')->insert([ 'name' => 'She Thinks My Tractors Sexy', 'artist' => 'Kenny Chesney', 'duration' => '248', 'genre_id' => '4']);
        DB::table('songs')->insert([ 'name' => 'Quit Your Bithin', 'artist' => 'Rebel Son', 'duration' => '175', 'genre_id' => '4']);
        DB::table('songs')->insert([ 'name' => 'Amos Moses', 'artist' => 'Jerry Reed', 'duration' => '139', 'genre_id' => '4']);
        DB::table('songs')->insert([ 'name' => 'Oerend Hard', 'artist' => 'Normaal', 'duration' => '224', 'genre_id' => '4']);
        DB::table('songs')->insert([ 'name' => 'Piss Up A Rope', 'artist' => 'Ween', 'duration' => '213', 'genre_id' => '4']);

        //genre: Doom Metal
        DB::table('songs')->insert([ 'name' => 'Bottled Insanity', 'artist' => 'Eastern High', 'duration' => '289', 'genre_id' => '5']);
        DB::table('songs')->insert([ 'name' => 'Footprints', 'artist' => 'Warning', 'duration' => '451', 'genre_id' => '5']);
        DB::table('songs')->insert([ 'name' => 'Puritan Masochism', 'artist' => 'Konvent', 'duration' => '281', 'genre_id' => '5']);
        DB::table('songs')->insert([ 'name' => 'Trust', 'artist' => 'Konvent', 'duration' => '317', 'genre_id' => '5']);
        DB::table('songs')->insert([ 'name' => 'The Will To Die', 'artist' => 'Funeral', 'duration' => '378', 'genre_id' => '5']);



    }
}
