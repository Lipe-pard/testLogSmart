$(document).ready(function() {
    $('#btnSearch').on('click', function() {
        var search = $('#search').val();

        $.ajax({
            url: '/friends/search',
            type: 'GET',
            data: { 'search': search },
            success: function(data) {
                const tbody = $('table tbody');
                tbody.empty();

                if (data.length === 0) {
                    tbody.append('<tr><td colspan="3" class="text-center p-4">Nenhum amigo encontrado</td></tr>');
                    return;
                }

                data.forEach((friend) => {
                    tbody.append(`
                        <tr class="border-b">
                            <td class="text-left p-2 name cursor-pointer hover:text-indigo-600 hover:underline" data-url="${friend.url}">${friend.name}</td>
                            <td class="text-left">${friend.email}</td>
                            <td class="text-center">
                                <a href="#" data-modal-target="default-modal-delete-${friend.id}" data-modal-toggle="default-modal-delete-${friend.id}" class="cursor-pointer">
                                    <i class="fa-solid fa-trash text-red-600 hover:text-red-800"></i>
                                </a>
                            </td>
                        </tr>
                        <x-modal-delete id="${friend.id}" name="${friend.name}" />
                    `);
                });

                //Logica para abrir e fechar o modal
                $('[data-modal-toggle]').on('click', function() {
                    const modalId = $(this).attr('data-modal-target');
                    $('#' + modalId).removeClass('hidden');
                });

                $('[data-modal-hide]').on('click', function() {
                    const modalId = $(this).attr('data-modal-hide');
                    $('#' + modalId).addClass('hidden');
                });
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});
