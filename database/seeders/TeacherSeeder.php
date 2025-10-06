<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        $teachers = [
            [
                'name' => 'Kailo',
                'designation' => 'Professor, Harvard College',
                'image' => 'theme/images/6_1.jpg',
                'brief_details' => 'It is a long established fact that a reader will be distracted by readable content.',
                'long_note' => 'Kailo has been teaching for over 10 years in advanced pedagogy...',
                'whatsapp' => 'https://wa.me/1234567890',
                'gmail' => 'mailto:kailo@gmail.com',
                'twitter' => 'https://twitter.com/kailo',
                'linkedin' => 'https://linkedin.com/in/kailo',
            ],
            [
                'name' => 'Graves',
                'designation' => 'Professor, Harvard College',
                'image' => 'theme/images/7.jpg',
                'brief_details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'long_note' => 'Graves is known for his exceptional research in educational technology...',
                'whatsapp' => 'https://wa.me/9876543210',
                'gmail' => 'mailto:graves@gmail.com',
                'twitter' => 'https://twitter.com/graves',
                'linkedin' => 'https://linkedin.com/in/graves',
            ],
            [
                'name' => 'Poppy',
                'designation' => 'Professor, Harvard College',
                'image' => 'theme/images/10_1.jpg',
                'brief_details' => 'Contrary to popular belief, Lorem Ipsum is not simply random text.',
                'long_note' => 'Poppy has a PhD in linguistics and over 15 years of teaching experience...',
                'whatsapp' => 'https://wa.me/1122334455',
                'gmail' => 'mailto:poppy@gmail.com',
                'twitter' => 'https://twitter.com/poppy',
                'linkedin' => 'https://linkedin.com/in/poppy',
            ],
            [
                'name' => 'Rajat',
                'designation' => 'Professor, Harvard College',
                'image' => 'theme/images/10_1.jpg',
                'brief_details' => 'Contrary to popular belief, Lorem Ipsum is not simply random text.',
                'long_note' => 'Poppy has a PhD in linguistics and over 15 years of teaching experience...',
                'whatsapp' => 'https://wa.me/1122334455',
                'gmail' => 'mailto:poppy@gmail.com',
                'twitter' => 'https://twitter.com/poppy',
                'linkedin' => 'https://linkedin.com/in/poppy',
            ],
            [
                'name' => 'Siddharth',
                'designation' => 'Professor, Harvard College',
                'image' => 'theme/images/10_1.jpg',
                'brief_details' => 'Contrary to popular belief, Lorem Ipsum is not simply random text.',
                'long_note' => 'Poppy has a PhD in linguistics and over 15 years of teaching experience...',
                'whatsapp' => 'https://wa.me/1122334455',
                'gmail' => 'mailto:poppy@gmail.com',
                'twitter' => 'https://twitter.com/poppy',
                'linkedin' => 'https://linkedin.com/in/poppy',
            ],
            [
                'name' => 'Annu',
                'designation' => 'Professor, Harvard College',
                'image' => 'theme/images/10_1.jpg',
                'brief_details' => 'Contrary to popular belief, Lorem Ipsum is not simply random text.',
                'long_note' => 'Poppy has a PhD in linguistics and over 15 years of teaching experience...',
                'whatsapp' => 'https://wa.me/1122334455',
                'gmail' => 'mailto:poppy@gmail.com',
                'twitter' => 'https://twitter.com/poppy',
                'linkedin' => 'https://linkedin.com/in/poppy',
            ],
            [
                'name' => 'Nancy',
                'designation' => 'Professor, Harvard College',
                'image' => 'theme/images/10_1.jpg',
                'brief_details' => 'Contrary to popular belief, Lorem Ipsum is not simply random text.',
                'long_note' => 'Poppy has a PhD in linguistics and over 15 years of teaching experience...',
                'whatsapp' => 'https://wa.me/1122334455',
                'gmail' => 'mailto:poppy@gmail.com',
                'twitter' => 'https://twitter.com/poppy',
                'linkedin' => 'https://linkedin.com/in/poppy',
            ],
        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
