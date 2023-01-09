<?php

namespace Database\Seeders;

use App\Models\StaticPage;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StaticPage::insert([





          [

            'desc_ar' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and" ,
            'desc_en' => "لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لقد صمد ليس فقط لخمسة قرون ، ولكن أيضًا القفزة في التنضيد الإلكتروني ، وظل دون تغيير جوهري. تم نشره في الستينيات من القرن الماضي مع إصدار أوراق Letraset التي تحتوي على مقاطع Lorem Ipsum ، ومؤخرًا مع برامج النشر المكتبي مثل Aldus PageMaker بما في ذلك إصدارات Lorem Ipsum. لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لقد صمد ليس فقط لخمسة قرون ، ولكن أيضًا القفزة في التنضيد الإلكتروني ، وظل دون تغيير جوهري. تم نشره في الستينيات بإصدار أوراق Letraset التي تحتوي على مقاطع Lorem Ipsum و",
            'desc_de' => "Lorem Ipsum ist einfach ein Proforma-Skript, das in der Druck- und Satzindustrie verwendet wird. Lorem Ipsum ist seit dem 15. Jahrhundert der branchenübliche Dummy-Text, als ein unbekannter Drucker eine Typenplatte nahm und daraus ein Musterbuch machte. Es hat nicht nur fünf Jahrhunderte überstanden, sondern auch den Sprung im elektronischen Satz und ist im Wesentlichen unverändert geblieben. Es wurde in den 1960er Jahren mit der Veröffentlichung von Letraset-Blättern mit Passagen von Lorem Ipsum und in jüngerer Zeit mit Desktop-Publishing-Software wie Aldus PageMaker, einschließlich Versionen von Lorem Ipsum, populär. Lorem Ipsum ist einfach ein Proforma-Skript, das in der Druck- und Satzindustrie verwendet wird. Lorem Ipsum ist seit dem 15. Jahrhundert der branchenübliche Dummy-Text, als ein unbekannter Drucker eine Typenplatte nahm und daraus ein Musterbuch machte. Es hat nicht nur fünf Jahrhunderte überstanden, sondern auch den Sprung im elektronischen Satz und ist im Wesentlichen unverändert geblieben. Es wurde in den 1960er Jahren mit der Veröffentlichung von Letraset-Blättern populär, die die Silben Lorem Ipsum und",
            'img'  => 'static/1.png',


          ],


        ]);
    }
}
