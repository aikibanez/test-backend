<?php

namespace App\ApiResource;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;

/**
 * Description of Agenda
 *
 * @author manxomatt
 * 
 * @ApiResource(
 *  collectionOperations={
 *      "binarytodecimal"={
 *          "method"="post",
 *          "path"="/binarytodecimal",
 *          "controller"="App\Controller\CompController::binarytodecimal",
 *          "openapi_context"={
 *              "summary"="Binary to decimal",
 *              "requestBody"={
 *                   "content"={
 *                      "application/json"={
 *                          "schema"={
 *                              "type"="object",  
 *                              "properties"={
 *                                  "input"= { "type"= "int" },
 *                              }      
 *                          },
 *                          "example"={
 *                               "input" = 1001,
 *                          }  
 *                       }
 *                   }
 *              }
 *          }
 *      },
 *    "decimaltobinary"={
 *          "method"="post",
 *          "path"="/decimaltobinary",
 *          "controller"="App\Controller\CompController::decimaltobinary",
 *          "openapi_context"={
 *              "summary"="decimal to binary",
 *              "requestBody"={
 *                   "content"={
 *                      "application/json"={
 *                          "schema"={
 *                              "type"="object",  
 *                              "properties"={
 *                                  "input"= { "type"= "int" },
 *                              }      
 *                          },
 *                          "example"={
 *                               "input" = 19,
 *                          }  
 *                       }
 *                   }
 *              }
 *          }
 *      },
 *    "palindrom"={
 *          "method"="post",
 *          "path"="/palindrom",
 *          "controller"="App\Controller\CompController::palindrome",
 *          "openapi_context"={
 *              "summary"="palindrome",
 *              "requestBody"={
 *                   "content"={
 *                      "application/json"={
 *                          "schema"={
 *                              "type"="object",  
 *                              "properties"={
 *                                  "text"= { "type"= "string" },
 *                              }      
 *                          },
 *                          "example"={
 *                               "text" = "kasur rusak adi",
 *                          }  
 *                       }
 *                   }
 *              }
 *          }
 *      },
 * 
 * 
 * },
 *  itemOperations={
 *      
 * 
 *  }
 * )
 */
class Test
{
  /**
   *
   * @ApiProperty(identifier=true)
   * @var int
   */
  public $input;

  /** 
   * @var string
   * 
   */
  public $text;
 
}
