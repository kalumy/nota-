<?php

use Illuminate\Database\Seeder;
use App\Note;
use App\Category;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        $notes = factory(Note::class)->times(20)->make();

        foreach ($notes as $note) {
        	$category = $categories ->random();
        	$category->notes()->save($note);
        }
    }
}
