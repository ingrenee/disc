/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(e) {
	
	
	
	$('.pagination a').click(function(e) {
        e.preventDefault();
		var id = $(this).attr('href');
		var p=$(id).offset();
		var alto=$('.info_user').innerHeight();
		
		console.log(alto);
		p.top=p.top-alto-20;

		$('body').scrollTop(p.top);
		
    });
	
	
    $('input.radio').click(function(e) {
      //  e.stopImmediatePropagation();
        var id=$(this).attr('data-c');
         var group=$(this).attr('data-group');
		
        console.log(id);
        console.log($('input.'+id).is(':checked'));
             
             conteo(); 
			  
               verificar();
        if (!$('input.'+id).is(':checked')) {
            $(this).attr('checked','checked');
            $('input.'+group).attr('disabled',false);
            $('input.'+id).attr('disabled',true);
        }else
        {
            $(this).removeAttr('checked');
            $('input.'+id).attr('disabled',false);
        }
		
		
    });
	
	
	
	
		
		
	
	function conteo()
	{
		var c1,c2,d1,d2,i1,i2,s1,s2;
		
		d1=contar('.d1');
		nd1=contar('#mas-10-d');
		d1=d1-nd1;
		
		d2=contar('.d2');
		i1=contar('.i1');
		i2=contar('.i2');
		s1=contar('.s1');
		s2=contar('.s2');
		
		ns2=contar('#menos-16-s');
		s2=s2-ns2;
		
		
		c1=contar('.c1');
		c2=contar('.c2');
		var str=":::d1:"+d1+"-d2:"+d2;
		str=str+":::i1:"+i1+"-i2:"+i2;
		str=str+":::s1:"+s1+"-s2:"+s2;
		str=str+":::c1:"+c1+"-c2:"+c2;

		$('#d1').val(d1);
		$('#i1').val(i1);
		$('#s1').val(s1);		
		$('#c1').val(c1);
		
		$('#pos_n').val(nd1);
		$('#neg_n').val(ns2);
		
		$('#d2').val(d2);
		$('#i2').val(i2);
		$('#s2').val(s2);		
		$('#c2').val(c2);						
		
		
		
		$('.info').html(str);
		
		}
		
		function contar(c)
		{ var i=0;
			$(c).each(function(index, element) {
		if($(this).is(':checked'))
		{
			i++;
			}	
		
		});
		 return i;
			}
});


function verificar()
	{
		var r=true;
		
		$('.main .item').each(function(index, element) {
		//$(this).find('')
			var id=$(this).attr('id');
//		alert(index);
	var i1 = $("input:radio[name ='kmas["+index+"]']:checked").val();

			var i2 = $("input:radio[name ='kmenos["+index+"]']:checked").val();
			if(typeof i1 !== "undefined" && typeof i2 !=="undefined")
			{
				$(this).addClass('check');
				$('.pag-'+id).addClass('check');
				
				$(this).removeClass('uncheck');
				$('.pag-'+id).removeClass('uncheck');
				}else
				{
					$(this).addClass('uncheck');
					
					$(this).removeClass('check');
					
					
					$('.pag-'+id).addClass('uncheck');
					
					$('.pag-'+id).removeClass('check');
					
					r=false;
					
					}
			
			
		});
		console.log("return="+r);
		
		return r;
		}
		

function enviar()
		{
			var i=verificar();
			if(i)
			{
				$('#test-disc').submit();}
				else
				{alert('Completa todas las preguntas.');
					
					}
				
				
			}
		function f()
		{ 
		alert(456);
		return false;}