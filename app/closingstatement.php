<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class closingstatement extends Model
{

	
    //Table Name
     protected $table = 'closing_statement';

	  protected $fillable = ['m_id', 'Total_income', 'wallet_amount', 'royalty_1_income', 'royalty_2_income', 'royalty_3_income', 'royalty_4_income', 'Spill_Income', 'Closing_Date'];

}
