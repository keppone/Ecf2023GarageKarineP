<?php 

namespace App\Validation; 

class Validator
{

    private $data;
    private $errors;

    public function __construct(array $data)
    {
        $this->data = $data; 
    }   

    public function validate(array $rules): ?array{
        
        foreach($rules as $name => $rulesArray) {
            if (array_key_exists($name, $this->data)){
                foreach ($rulesArray as $rule){
                    switch($rule){
                        case 'required': 
                            $this->required($name, $this->data[$name]);
                            break;
                        case 'mail': 
                            $this->mail($name, $this->data[$name]);
                            break;
                        default: 

                            break;
                    }    

                }    
                
            }
        }   
         return $this->getErrors();
    }   
    
   

    private function required(string $name, string $value)
    {
        $value = trim($value);

        if (!isset($value) || is_null($value) || empty($value)){
            $this->errors[$name][]="{$name} est requis.";
        }
    }

    private function mail (string $name, string $value)
    { 
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$name][]="Veuiller renseigner un {$name} valide.";
        }
    }   
    
    private function getErrors(): ?array
    {
        return $this->errors;
    }


} 