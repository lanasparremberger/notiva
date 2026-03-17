<style>
/* Tooltip estilizado (pode deixar junto ou pôr num CSS separado) */
.tooltip {
    position: relative;
}

.tooltip span {
    visibility: hidden;
    opacity: 0;
    position: absolute;
    left: 60px;
    top: 50%;
    transform: translateY(-50%);
    background-color: #CB798B;
    color: white;
    padding: 4px 8px;
    font-size: 12px;
    border-radius: 6px;
    white-space: nowrap;
    transition: opacity 0.2s ease-in-out;
}

.tooltip:hover span {
    visibility: visible;
    opacity: 1;
}
</style>

<nav class="w-[70px] h-screen bg-[#f5eee7] flex flex-col items-center py-6">

    <!-- Ícone da casa (TOPO) -->
    <a href="index.php" class="group tooltip mb-8 active">
        <i class="fa-solid fa-house text-xl 
           text-[#CB798B] transition-all duration-300 
           group-hover:scale-125 group-hover:opacity-80"></i>

        <!-- Tooltip -->
        <span>Início</span>
    </a>

    <!-- Ícones do meio -->
    <div class="flex flex-col items-center space-y-6">

        <a href="" class="group tooltip">
            <i class="fa-solid fa-paperclip text-xl 
               text-[#CB798B] transition-all duration-300 
               group-hover:scale-125 group-hover:opacity-80"></i>
            <span>Anexos</span>
        </a>

        <a href="anotacoes.php" class="group tooltip">
            <i class="fa-solid fa-pen-nib text-xl 
               text-[#CB798B] transition-all duration-300 
               group-hover:scale-125 group-hover:opacity-80"></i>
            <span>Escrever</span>
        </a>

        <a href="" class="group tooltip">
            <i class="fa-solid fa-bookmark text-xl 
               text-[#CB798B] transition-all duration-300 
               group-hover:scale-125 group-hover:opacity-80"></i>
            <span>Favoritos</span>
        </a>

        <a href="" class="group tooltip">
            <i class="fa-solid fa-book text-xl 
               text-[#CB798B] transition-all duration-300 
               group-hover:scale-125 group-hover:opacity-80"></i>
            <span>Livros</span>
        </a>

        <a href="" class="group tooltip">
            <i class="fa-solid fa-code text-xl 
               text-[#CB798B] transition-all duration-300 
               group-hover:scale-125 group-hover:opacity-80"></i>
            <span>Código</span>
        </a>

        <a href="" class="group tooltip">
            <i class="fa-solid fa-cat text-xl 
               text-[#CB798B] transition-all duration-300 
               group-hover:scale-125 group-hover:opacity-80"></i>
            <span>Pets</span>
        </a>
    </div>

    <!-- Ícone da engrenagem (RODAPÉ) -->
    <a href="" class="group tooltip mt-auto pb-6">
        <i class="fa-solid fa-gear text-xl 
           text-[#CB798B] transition-all duration-300 
           group-hover:scale-125 group-hover:opacity-80"></i>
        <span>Configurações</span>
    </a>

</nav>
