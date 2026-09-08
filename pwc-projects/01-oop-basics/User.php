<?php

class User
{
    // هذه الـ Properties (خصائص الكائن)
    public string $name;
    public string $email;
    public int $age;

    // هذا الـ Constructor - يشتغل أوتوماتيكياً عند إنشاء أي Object جديد
    public function __construct(string $name, string $email, int $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    // هذه Method (وظيفة) تخص الكائن
    public function introduce(): string
    {
        return "أنا {$this->name}, عمري {$this->age} سنة";
    }
}

// الآن ننشئ Objects (نسخ فعلية) من هذا الـ Class
$user1 = new User("مصطفى", "mostafa@example.com", 25);
$user2 = new User("أحمد", "ahmed@example.com", 30);

echo $user1->introduce(); // أنا مصطفى, عمري 25 سنة
echo $user2->introduce(); // أنا أحمد, عمري 30 سنة