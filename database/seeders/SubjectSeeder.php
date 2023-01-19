<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Department;
use App\Models\Student;
use Mockery\Matcher\Subset;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ############# الكورس الاول مواد قسم الحاسوب  الصف الاول ###########
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => 'Programming 1',
            'name_ar' => 'البرمجة ١ ',
            'course' => 1,
            'degree' => 3,
            'stage' => 1,
            'unit' => 4,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' mathematics',
            'name_ar' => 'الرياضيات ',
            'course' => 1,
            'degree' => 3,
            'stage' => 1,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Computer skills',
            'name_ar' => 'مهارات الحاسوب 
            ',
            'course' => 1,
            'degree' => 3,
            'stage' => 1,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' English 1',
            'name_ar' => 'الانكليزي ١',
            'course' => 1,
            'degree' => 3,
            'stage' => 1,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Democracy and human rights',
            'name_ar' => 'الديمقراطية وحقوق الانسان 
            ',
            'course' => 1,
            'degree' => 3,
            'stage' => 1,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Health and fitness',
            'name_ar' => 'الصحة واللياقة  ',
            'course' => 1,
            'degree' => 3,
            'stage' => 1,
            'unit' => 3,
        ]);

        ############# الكورس الثاني مواد قسم الحاسوب  الصف الاول ###########
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Programming 2',
            'name_ar' => 'البرمجة 2  ',
            'course' => 2,
            'degree' => 3,
            'stage' => 1,
            'unit' => 4,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Logical design',
            'name_ar' => 'التصميم المنطقي ',
            'course' => 2,
            'degree' => 3,
            'stage' => 1,
            'unit' => 4,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' english 2',
            'name_ar' => 'الانكليزي 2      ',
            'course' => 2,
            'degree' => 3,
            'stage' => 1,
            'unit' => 2,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' advanced structures',
            'name_ar' => 'الهياكل المتقدمة    ',
            'course' => 2,
            'degree' => 3,
            'stage' => 1,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' principles of information technology',
            'name_ar' => 'مبادى تكنولوجيا المعلومات  ',
            'course' => 2,
            'degree' => 3,
            'stage' => 1,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' computer applications',
            'name_ar' => 'تطبيقات الحاسوب        ',
            'course' => 2,
            'degree' => 3,
            'stage' => 1,
            'unit' => 3,
        ]);

        ############# الكورس الاول مواد قسم الحاسوب  الصف الثاني ###########
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Entity Programming 1',
            'name_ar' => 'البرمجة الكيانية ١ ',
            'course' => 1,
            'degree' => 3,
            'stage' => 2,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Computer drawing',
            'name_ar' => 'الرسم بالحاسوب  ',
            'course' => 1,
            'degree' => 3,
            'stage' => 2,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Microprocessors',
            'name_ar' => 'المعالجات المايكروية ',
            'course' => 1,
            'degree' => 3,
            'stage' => 2,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Databases',
            'name_ar' => 'قواعد البيانات',
            'course' => 1,
            'degree' => 3,
            'stage' => 2,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' probability and statistics',
            'name_ar' => 'الاحتمالية والاحصاء  ',
            'course' => 1,
            'degree' => 3,
            'stage' => 2,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Arabi',
            'name_ar' => 'العربي    ',
            'course' => 1,
            'degree' => 3,
            'stage' => 2,
            'unit' => 2,
        ]);

        ############# الكورس الثاني مواد قسم الحاسوب  الصف الثاني ###########
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Entity Programming 2',
            'name_ar' => 'البرمجة الكيانية ٢ ',
            'course' => 2,
            'degree' => 3,
            'stage' => 2,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Visual Programming',
            'name_ar' => 'البرمجة المرئية  ',
            'course' => 2,
            'degree' => 3,
            'stage' => 2,
            'unit' => 3,
        ]);

        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Computational Theory',
            'name_ar' => 'النظرية الاحتسابية ',
            'course' => 2,
            'degree' => 3,
            'stage' => 2,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Analysis and design of systems',
            'name_ar' => 'تحليل وتصميم النظم ',
            'course' => 2,
            'degree' => 3,
            'stage' => 2,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Data Structures 1',
            'name_ar' => 'هياكل البيانات ١ ',
            'course' => 2,
            'degree' => 3,
            'stage' => 2,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Numerical Methods',
            'name_ar' => 'الطرق العددية ',
            'course' => 2,
            'degree' => 3,
            'stage' => 2,
            'unit' => 3,
        ]);

        ############# الكورس الاول مواد قسم الحاسوب  الصف الثالث ###########
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Artificial Intelligence',
            'name_ar' => 'الذكاء الاصطناعي ',
            'course' => 1,
            'degree' => 3,
            'stage' => 3,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Software Engineering',
            'name_ar' => 'هندسة البرمجيات ',
            'course' => 1,
            'degree' => 3,
            'stage' => 3,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Web Programming 1',
            'name_ar' => 'برمجة المواقع ١ ',
            'course' => 1,
            'degree' => 3,
            'stage' => 3,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Computer Networks 1',
            'name_ar' => 'شبكات الحاسوب ١ ',
            'course' => 1,
            'degree' => 3,
            'stage' => 3,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Data Structures 2',
            'name_ar' => 'هياكل البيانات 2 ',
            'course' => 1,
            'degree' => 3,
            'stage' => 3,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Concepts of Programming Languages',
            'name_ar' => 'مفاهيم لغات البرمجة ',
            'course' => 1,
            'degree' => 3,
            'stage' => 3,
            'unit' => 3,
        ]);

        ############# الكورس الثاني مواد قسم الحاسوب  الصف الثالث ###########
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Computer Networks 2',
            'name_ar' => 'شبكات الحاسوب ٢ ',
            'course' => 2,
            'degree' => 3,
            'stage' => 3,
            'unit' => 4,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Web Programming 2',
            'name_ar' => 'برمجة المواقع ٢ ',
            'course' => 2,
            'degree' => 3,
            'stage' => 3,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Operations Research',
            'name_ar' => 'بحوث العمليات ',
            'course' => 2,
            'degree' => 3,
            'stage' => 3,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Computer Ethics',
            'name_ar' => 'اخلاقيات الحاسوب ',
            'course' => 2,
            'degree' => 3,
            'stage' => 3,
            'unit' => 2,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Computer Architecture',
            'name_ar' => 'معمارية الحاسوب ',
            'course' => 2,
            'degree' => 3,
            'stage' => 3,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => '  Translators',
            'name_ar' => ' مترجمات  ',
            'course' => 2,
            'degree' => 3,
            'stage' => 3,
            'unit' => 3,
        ]);


        ############# الكورس الاول مواد قسم الحاسوب  الصف الرابع ###########
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Data Mining',
            'name_ar' => 'تنقيب البيانات ',
            'course' => 1,
            'degree' => 4,
            'stage' => 4,
            'unit' => 2,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Graduation Project',
            'name_ar' => 'مشروع التخرج ',
            'course' => 1,
            'degree' => 4,
            'stage' => 4,
            'unit' => 2,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Operating Systems',
            'name_ar' => 'انظمة لتشغيل ',
            'course' => 1,
            'degree' => 4,
            'stage' => 4,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Computer Vision',
            'name_ar' => 'الرؤيا بالحاسوب ',
            'course' => 1,
            'degree' => 4,
            'stage' => 4,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Cloud Computing',
            'name_ar' => 'الحوسبة السحابية ',
            'course' => 1,
            'degree' => 4,
            'stage' => 4,
            'unit' => 2,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Mobile Applications',
            'name_ar' => 'تطبيقات النقال ',
            'course' => 1,
            'degree' => 4,
            'stage' => 4,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Computer Intelligence',
            'name_ar' => 'الذكاء الحاسوبي ',
            'course' => 1,
            'degree' => 4,
            'stage' => 4,
            'unit' => 3,
        ]);

        ############# الكورس الثاني مواد قسم الحاسوب  الصف الرابع ###########
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Computer Security',
            'name_ar' => 'امنية الحاسوب ',
            'course' => 2,
            'degree' => 4,
            'stage' => 4,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Selected Topics',
            'name_ar' => 'مواضيع مختارة ',
            'course' => 2,
            'degree' => 4,
            'stage' => 4,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Human Computer Interaction',
            'name_ar' => 'تفاعل الانسان مع الحاسوب ',
            'course' => 2,
            'degree' => 4,
            'stage' => 4,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Computer Simulation',
            'name_ar' => 'المحاكاة بالحاسوب ',
            'course' => 2,
            'degree' => 4,
            'stage' => 4,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Communication Skills',
            'name_ar' => 'مهارات الاتصال ',
            'course' => 2,
            'degree' => 4,
            'stage' => 4,
            'unit' => 3,
        ]);
        Subject::create([
            'department_id' => Department::first()->id,
            'name_en' => ' Knowledge Engineering',
            'name_ar' => 'هندسة المعرفة',
            'course' => 2,
            'degree' => 4,
            'stage' => 4,
            'unit' => 3,
        ]);
    }
}
