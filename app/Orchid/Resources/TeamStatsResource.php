<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Sight;
use Illuminate\Http\Request;
use App\Models\TeamStats;
use Orchid\Screen\Fields\Text;
class TeamStatsResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\TeamStats::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('satisfied_clients_number')
                ->title('Satisfied Clients Number')
                 ->type('number'),
          
                

            Input::make('satisfied_clients_title')
                ->title('Satisfied Clients Title'),
              

            Input::make('positive_feedback_number')
                ->title('Positive Feedback Number')
                 ->type('number'),

              
             

            Input::make('positive_feedback_title')
                ->title('Positive Feedback Title'),
             

            Input::make('project_ongoing_number')
                ->title('Project Ongoing Number')
                 ->type('number'),

           
              

            Input::make('project_ongoing_title')
                ->title('Project Ongoing Title'),
              

            Input::make('years_of_experience_number')
                ->title('Years of Experience Number')
                 ->type('number'),
                 
                
            
         

            Input::make('years_of_experience_title')
                ->title('Years of Experience Title'),
               
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
   public function columns(): array
{
    return [
        TD::make('id')
            ->width('50px'), // Adjust width as needed

        TD::make('satisfied_clients_number', 'Satisfied Clients Number'),
           

       

        TD::make('positive_feedback_number', 'Positive Feedback Number'),
          
       

        TD::make('project_ongoing_number', 'Project Ongoing Number'),
            

       

        TD::make('years_of_experience_number', 'Years of Experience Number'),
          

       

        TD::make('updated_at', 'Update Date')
            ->render(function ($model) {
                return $model->updated_at->toDateTimeString();
            }),
           
    ];
}


    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
   public function legend(): array
{
    return [
        Sight::make('satisfied_clients_number'),
           
        Sight::make('satisfied_clients_title'),
            
        Sight::make('positive_feedback_number'),
           

        Sight::make('positive_feedback_title'),
           

        Sight::make('project_ongoing_number'),
           
        Sight::make('project_ongoing_title'),
           

        Sight::make('years_of_experience_number'),
            
        Sight::make('years_of_experience_title'),
            
    ];
}

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
    


}
